<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SearchFormType;

class SearchController extends AbstractController
{
    

    #[Route('/search', name: 'search')]
         public function search(Request $request): Response
    {
        $form = $this->createForm(SearchFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $query = $form->get('query')->getData();
            
            // Perform search based on $query, e.g., using Doctrine to query your database
            
            // For example:
            // $results = $this->getDoctrine()->getRepository(SomeEntity::class)->findByQuery($query);
            
            // Render the search results
            return $this->render('search/results.html.twig', [
                'results' => $results,
            ]);
        }

        return $this->render('search/search.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}