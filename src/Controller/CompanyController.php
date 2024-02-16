<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use App\Entity\Company;
use App\Form\CompanyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class CompanyController extends AbstractController
{
    private $entityManager;
    private $companyRepository;

    public function __construct(EntityManagerInterface $entityManager, CompanyRepository $companyRepository)
    {
        $this->entityManager = $entityManager;
        $this->companyRepository = $companyRepository;
    }
    #[Route('/company/new', name: 'company_new')]
    public function new(Request $request): Response
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $numTel = $form->get('Num_tel')->getData();
            if (!is_numeric($numTel)) {
                $form->get('Num_tel')->addError(new FormError('Le numéro de téléphone doit être un nombre positif.'));
                return $this->render('company/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
    
            $this->entityManager->persist($company);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('company_show', ['id' => $company->getIDC()]);
        }
    
        return $this->render('company/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/company/show', name: 'company_show')]
    public function showCompanies(): Response
    {
        $companies = $this->companyRepository->findAll();

        return $this->render('company/list.html.twig', [
            'companies' => $companies,
        ]);
    }

    #[Route('/company/{id}', name: 'company_show_one')]
    public function showCompany(int $id): Response
    {
        $company = $this->companyRepository->find($id);

        if (!$company) {
            throw $this->createNotFoundException('No company found with id '.$id);
        }

        return $this->render('company/show.html.twig', [
            'company' => $company,
        ]);
    }



  

    #[Route('/company/show/{id}/remove', name: 'delete_company')]
    public function removeCompany($id): Response
    { $company = $this->companyRepository->find($id);
        if (!$company) {
            throw $this->createNotFoundException('company not found');
        }
        
        $this->entityManager->remove($company);
        $this->entityManager->flush();

        return $this->redirectToRoute('company_show');
    }



   #[Route('/company/{id}', name: 'update_company')]
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



}