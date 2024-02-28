<?php

namespace App\Controller;

use App\Entity\Volunteer;
use App\Repository\CompanyRepository;
use App\Entity\Company;
use App\Form\CompanyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Service\QrCodeGenerator;
use Endroid\QrCode\QrCode;
class CompanyController extends AbstractController
{
    private $entityManager;
    private $companyRepository;
    private $qrCodeGenerator;
    public function __construct(QrCodeGenerator $qrCodeGenerator,EntityManagerInterface $entityManager, CompanyRepository $companyRepository)
    {
        $this->entityManager = $entityManager;
        $this->companyRepository = $companyRepository;
        $this->qrCodeGenerator = $qrCodeGenerator;
    }

    #[Route('/admin/company/new', name: 'company_new')]
    public function new(Request $request): Response
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $numTel = $form->get('Num_tel')->getData();
            if (!is_numeric($numTel)) {
                $form->get('Num_tel')->addError(new FormError('Le numéro de téléphone doit être un nombre positif.'));
            } else {
                $this->entityManager->persist($company);
                $this->entityManager->flush();

                return $this->redirectToRoute('company_show', ['id' => $company->getIDC()]);
            }
        }

        return $this->render('admin/company/new.html.twig', [
            'form' => $form->createView(),
            'company' => $company,
        ]);
    }

    #[Route('/admin/company/show', name: 'company_show')]
    public function showCompanies(Request $request): Response
    {
        $sortBy = $request->query->get('sort_by');
        $searchQuery = $request->query->get('search_query');

        // Retrieve all companies from the repository
        $companies = $this->companyRepository->findAll();

        // Filter companies by search query if it exists
        if ($searchQuery !== null) {
            $companies = array_filter($companies, function($company) use ($searchQuery) {
                // You may need to adjust the conditions based on your entity's properties
                return stripos($company->getNomC(), $searchQuery) !== false;
            });
        }

        // Sort companies based on the specified criteria
        switch ($sortBy) {
            case 'name_asc':
                usort($companies, function($a, $b) { return strcmp($a->getNomC(), $b->getNomC()); });
                break;
            case 'name_desc':
                usort($companies, function($a, $b) { return strcmp($b->getNomC(), $a->getNomC()); });
                break;
            case 'email_asc':
                usort($companies, function($a, $b) { return strcmp($a->getMail(), $b->getMail()); });
                break;
            case 'email_desc':
                usort($companies, function($a, $b) { return strcmp($b->getMail(), $a->getMail()); });
                break;
            case 'country_asc':
                usort($companies, function($a, $b) { return strcmp($a->getPaysC(), $b->getPaysC()); });
                break;
            case 'country_desc':
                usort($companies, function($a, $b) { return strcmp($b->getPaysC(), $a->getPaysC()); });
                break;
            default:
                break;
        }

        return $this->render('admin/company/list.html.twig', [
            'companies' => $companies,
        ]);
    }

    #[Route('/company/show', name: 'home_company_show')]
    public function home_showCompanies(): Response
    {
        $companies = $this->companyRepository->findAll();

        return $this->render('home/company/list.html.twig', [
            'companies' => $companies,
        ]);
    }
    #[Route('/company/{id}', name: 'home_company_show_one')]
    public function home_showCompany(int $id): Response
    {
        $company = $this->companyRepository->find($id);

        if (!$company) {
            throw $this->createNotFoundException('No company found with id '.$id);
        }

        return $this->render('home/company/show.html.twig', [
            'company' => $company,
        ]);
    }

    #[Route('/company/pdf/{id}', name: 'company_pdf')]
    public function generatePdf(int $id): Response
    {
        $company = $this->companyRepository->find($id);

        if (!$company) {
            throw $this->createNotFoundException('No company found with id '.$id);
        }

        // Render the PDF template with company details
        $pdfContent = $this->renderView('admin/company/company_pdf.html.twig', [
            'company' => $company,
        ]);

        // Return a response with the PDF content
        return new Response(
            $pdfContent,
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }

    #[Route('/admin/company/{id}', name: 'company_show_one')]
    public function showCompany(int $id): Response
    {
        $company = $this->companyRepository->find($id);

        if (!$company) {
            throw $this->createNotFoundException('No company found with id '.$id);
        }

        $available_volunteers = $this->getDoctrine()->getRepository(Volunteer::class)->findBy(['company_id' => $company]);
        $associated_volunteers = $company->getVolunteers();

        return $this->render('admin/company/show.html.twig', [
            'company' => $company,
            'available_volunteers' => $available_volunteers,
        ]);
    }

    #[Route('/admin/company/show/{id}/remove', name: 'delete_company')]
    public function removeCompany($id): Response
    {
        $company = $this->companyRepository->find($id);
        if (!$company) {
            throw $this->createNotFoundException('Company not found');
        }
        
        $this->entityManager->remove($company);
        $this->entityManager->flush();

        return $this->redirectToRoute('company_show');
    }

    #[Route('/admin/company/{id}', name: 'update_company')]
    public function updateCompany(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $company = $entityManager->getRepository(Company::class)->find($id);

        $query = $entityManager->createQuery(
            'UPDATE App\Entity\Company c
            SET c.Nom_c = :name,
                c.Adresse = :address,
                c.Num_tel = :phone,
                c.mail = :email,
                c.Site_Web = :website,
                c.Pays_c = :country,
                c.Description_c = :description
            WHERE c.ID_c = :id'
        )
        ->setParameter('name', $request->request->get('Nom_c'))
        ->setParameter('address', $request->request->get('Adresse'))
        ->setParameter('phone', $request->request->get('Num_tel'))
        ->setParameter('email', $request->request->get('mail'))
        ->setParameter('website', $request->request->get('Site_Web'))
        ->setParameter('country', $request->request->get('Pays_c'))
        ->setParameter('description', $request->request->get('Description_c'))
        ->setParameter('id', $id);

        $query->execute();

        return $this->redirectToRoute('company_show', ['id' => $id]);
    }

    #[Route('/admin/company/statistics', name: 'company_statistics')]
    public function company_statistics(CompanyRepository $companyRepository): Response
    {
        // Retrieve all companies from the repository
        $companies = $companyRepository->findAll();
    
        // Check if there are any companies
        if (empty($companies)) {
            // Handle the case where there are no companies
            return $this->render('admin/company/stat.html.twig');
        }
    
        // Count companies by country
        $companiesByCountry = [];
        foreach ($companies as $company) {
            $country = $company->getPaysC();
            if (!isset($companiesByCountry[$country])) {
                $companiesByCountry[$country] = 1;
            } else {
                $companiesByCountry[$country]++;
            }
        }
    
        // Prepare data for the chart
        $dataPoints = [];
        foreach ($companiesByCountry as $country => $count) {
            $dataPoints[] = ['label' => $country, 'y' => $count];
        }
    
        // Render the Twig template with the data
        return $this->render('admin/company/stat.html.twig', [
            'dataPoints' => json_encode($dataPoints, JSON_NUMERIC_CHECK),
        ]);
    }
}
