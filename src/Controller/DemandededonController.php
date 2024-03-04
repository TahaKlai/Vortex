<?php

namespace App\Controller;

use App\Entity\Demandededon;
use App\Form\DemandededonType;
use App\Repository\DemandededonRepository;
use App\Service\SmsGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demandededon')]
class DemandededonController extends AbstractController
{
    #[Route('/', name: 'app_demandededon_index', methods: ['GET'])]
    public function index(DemandededonRepository $demandededonRepository): Response
    {
        return $this->render('demandededon/index.html.twig', [
            'demandededons' => $demandededonRepository->findAll(),
        ]);
    }
    #[Route('/view', name: 'demandededon.view', methods: ['GET'])]
    public function view(DemandededonRepository $demandededonRepository): Response
    {
        return $this->render('view.html.twig', [
            'demandededons' => $demandededonRepository->findAll(),
        ]);
    }



    #[Route('/new', name: 'app_demandededon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SmsGenerator $smsGenerator): Response
    {
        $demandededon = new Demandededon();
        $form = $this->createForm(DemandededonType::class, $demandededon);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($demandededon);
            $entityManager->flush();
    
            // Send an SMS message
            $number = '1234567890'; // Replace with the actual phone number
            $name = 'Your Name'; // Replace with the actual name
            $text = 'A new Demandededon has been created.'; // Replace with the actual message
            $smsGenerator->SendSms($number, $name, $text);
    
            return $this->redirectToRoute('app_demandededon_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('demandededon/new.html.twig', [
            'demandededon' => $demandededon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demandededon_show', methods: ['GET'])]
    public function show(Demandededon $demandededon): Response
    {
        return $this->render('demandededon/show.html.twig', [
            'demandededon' => $demandededon,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_demandededon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Demandededon $demandededon, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DemandededonType::class, $demandededon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_demandededon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('demandededon/edit.html.twig', [
            'demandededon' => $demandededon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_demandededon_delete', methods: ['POST'])]
    public function delete(Request $request, Demandededon $demandededon, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demandededon->getId(), $request->request->get('_token'))) {
            $entityManager->remove($demandededon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demandededon_index', [], Response::HTTP_SEE_OTHER);
    }
}
