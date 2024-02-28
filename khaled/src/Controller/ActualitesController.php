<?php

namespace App\Controller;

use App\Entity\Actualites;
use App\Form\ActualitesType;
use App\Repository\ActualitesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

use Dompdf\Dompdf;
use Dompdf\Options;


// Include Dompdf required namespaces

// Require PDF class of the library
use PDFMerger;


#[Route('/actualites')]
class ActualitesController extends AbstractController
{
    #[Route('/', name: 'app_actualites_index', methods: ['GET'])]
    public function index(ActualitesRepository $actualitesRepository, Request $request , paginatorInterface $paginator): Response
    {

        
        
        $pagination = $paginator->paginate(
            $actualitesRepository->paginationQuery(),
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('actualites/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    #[Route('/new', name: 'app_actualites_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $actualite = new Actualites();
        $form = $this->createForm(ActualitesType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($actualite);
            $entityManager->flush();

            $email = (new Email())
            ->from('khaledcheour555@gmail.com')
            ->to('khaled.cheour@esprit.tn')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Bienvenue à ComptaMerveille')
            ->text('!!')    
            ->html('<p>Merci de nous faire confiance </p>');

        $mailer->send($email);

            return $this->redirectToRoute('app_actualites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actualites/new.html.twig', [
            'actualite' => $actualite,
            'form' => $form,
        ]);

       
    }



    #[Route('/listp', name: 'app_actualites_listp', methods: ['GET'])]
    public function listp(ActualitesRepository $actualitesRepository ): Response
    {
       
        $actualite = $actualitesRepository->findall();
            $html= $this->render('actualites/listp.html.twig', [
                'actualites' => $actualite,
            ]);
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Arial');
    
            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            $dompdf->loadHtml($html);

            // (Optional) Setup the paper size and orientation 'portrait' or 'landscape'
            $dompdf->setPaper('A4', 'portrait');
    
            // Render the HTML as PDF
            $dompdf->render();
    
            // Output the generated PDF to Browser (inline view)
            $dompdf->stream("mypdf.pdf", [
                "Attachment" => false
            ]);
    
            return new Response('', 200, [
                'Content-Type' => 'application/pdf',
            ]);
        }
       
       
       
       
    
   
   
   


    #[Route('actualitess/{id}', name: 'app_actualites_show', methods: ['GET'])]
    public function show(Actualites $actualite): Response
    {
        return $this->render('actualites/show.html.twig', [
            'actualite' => $actualite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_actualites_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Actualites $actualite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActualitesType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_actualites_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('actualites/edit.html.twig', [
            'actualite' => $actualite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_actualites_delete', methods: ['POST'])]
    public function delete(Request $request, Actualites $actualite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actualite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($actualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_actualites_index', [], Response::HTTP_SEE_OTHER);
    }



    #[Route('/actualites/sort/{sortField}', name: 'app_actualites_sort', methods: ['GET'])]
    public function sort(Request $request, ActualitesRepository $actualitesRepository, PaginatorInterface $paginator, string $sortField): Response
    {
        $actualites = $actualitesRepository->findBy([], [$sortField => 'ASC']);
        $pagination = $paginator->paginate(
            $actualites, 
            $request->query->getInt('page', 1),
            10 // Nombre d'éléments par page
        );
    
        return $this->render('actualites/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }



    

    #[Route('/actualites/stats', name: 'app_actualites_stat')]
    public function stats(ActualitesRepository $ActualitesRepository)
    {
    $stats = $ActualitesRepository->getStatsByType();

    return $this->render('actualites/stats.html.twig', [
        'stats' => $stats,
    ]);
    }

    


    #[Route('/actualites/search', name: 'search_actualites')]
    public function searchByType(Request $request, ActualitesRepository $ActualitesRepository): Response
    {
        $query = $request->request->get('query');
        $actualites = $ActualitesRepository->searchByType($query);
        return $this->render('actualites/search.html.twig', [
            'actualites' => $actualites
        ]);
    }







    



}
