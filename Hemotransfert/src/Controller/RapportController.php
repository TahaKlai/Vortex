<?php


// src/Controller/RapportController.php

namespace App\Controller;

use App\Service\RapportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RapportController extends AbstractController
{
    /**
     * @Route("/rapport", name="rapport")
     */
    public function index(RapportService $rapportService): Response
    {
        $rapport = $rapportService->genererRapport();

        return $this->render('rapport/index.html.twig', [
            'rapport' => $rapport,
        ]);
    }
}