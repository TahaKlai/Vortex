<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/', name: 'admin_home')]
    public function index(): Response
    {
        return $this->render('admin/base.html.twig');
    }
	#[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home/company/index.html.twig');
    }
	
	
}
