<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManageBMController extends AbstractController
{
    #[Route('/managebm', name: 'app_manage_b_m')]
    public function index(): Response
    {
        return $this->render('manage_bm/index.html.twig', [
            'controller_name' => 'ManageBMController',
        ]);
    }
}
