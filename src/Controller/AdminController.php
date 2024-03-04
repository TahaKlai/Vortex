<?php

namespace App\Controller;

use App\Entity\Livreur;
use App\Entity\Materiel;
use App\Form\LivreurType;
use App\Form\MaterielType;
use App\Repository\LivreurRepository;
use App\Repository\MaterielRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use DateTime;


class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('AdminLivMat/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/Materiels/ajouter', name: 'app_admin_add')]
    // public function ajouterMateriels(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    // {
    //     $materiel = new Materiel();
    //     $form = $this->createForm(MaterielType::class, $materiel);
    //     $form->handleRequest($request);
    
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $brochureFile = $form->get('photoM')->getData();
    
    //         if ($brochureFile) {
    //             $originalFilename = pathinfo($brochureFile->getClientOriginalName());
    //             $safeFilename = $slugger->slug($originalFilename);
    //             $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
    
    //             try {
    //                 $brochureFile->move(
    //                     $this->getParameter('upload_directory'),
    //                     $newFilename
    //                 );
    //             } catch (FileException $e) {
    //                 // Gérer les erreurs de téléchargement de fichier, par exemple afficher un message d'erreur à l'utilisateur
    //                 throw new \Exception('Une erreur s\'est produite lors du téléchargement du fichier.');
    //             }
    
    //             $materiel->setPhotoM($newFilename);
    //         }
    
    //         // Persistez l'entité Materiel dans la base de données
    //         $entityManager->persist($materiel);
    //         $entityManager->flush();
    
    //         // Redirigez ou affichez une vue de confirmation
    //         return $this->redirectToRoute('app_admin_list');
    //     }
    
    //     return $this->render('admin/ajouterMateriels.html.twig', [
    //         'form' => $form->createView(),
    //     ]);
    // }
    
    public function ajouterMateriels(Request $request, EntityManagerInterface $entityManager): Response
    {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($materiel);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_list');
        }
        return $this->renderForm('AdminLivMat/ajouterMateriels.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }
    #[Route('/admin/Materiels/liste', name: 'app_admin_list')]
    public function modifierMateriels(MaterielRepository $materielRepository,Request $request): Response
    {
        $sortBy = $request->query->get('sort_by');
        $searchQuery = $request->query->get('search_query');
    
    
        $materiels = $materielRepository->findAll();
    
        
        if ($searchQuery) {
            $materiels = array_filter($materiels, function(Materiel $materiel) use ($searchQuery) {
                return stripos($materiel->getTypeM(), $searchQuery) !== false;
            });
        }
    

        switch ($sortBy) {
            case 'type_asc':
                usort($materiels, function($a, $b) { return strcmp($a->getTypeM(), $b->getTypeM()); });
                break;
            case 'type_desc':
                usort($materiels, function($a, $b) { return strcmp($b->getTypeM(), $a->getTypeM()); });
                break;
           
            case 'date_asc':
                usort($materiels, function($a, $b) {
                    return strtotime($a->getDateexpM()->format('Y-m-d')) - strtotime($b->getDateexpM()->format('Y-m-d'));
                });
                break;
            case 'date_desc':
                usort($materiels, function($a, $b) {
                    return strtotime($b->getDateexpM()->format('Y-m-d')) - strtotime($a->getDateexpM()->format('Y-m-d'));
                });
                break;
            default:
   
                break;
        }
        
        return $this->render('AdminLivMat/listeMateriels.html.twig', [
            'materiels' => $materiels,
        ]);
    }
   
    #[Route('/admin/Materiels/Modifier/{id}', name: 'app_materiel_modifier')]
    public function edit(Request $request, Materiel $materiel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_list');
        }

        return $this->renderForm('AdminLivMat/modifierMateriels.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }

    #[Route('/admin/Materiels/Supprimer/{id}', name: 'app_materiel_supprimer')]
    public function delete($id, MaterielRepository $materielRepository, EntityManagerInterface $entityManager): Response
    {

        $materiel = $materielRepository->find($id);
            $entityManager->remove($materiel);
            $entityManager->flush();
  

        return $this->redirectToRoute('app_admin_list');
    }
    // ----------------------------------------------------------------
    #[Route('/admin/Livreur/ajouter', name: 'app_admin_livreur_add')]
    public function ajouterLivreur(Request $request, EntityManagerInterface $entityManager): Response
    {
        $livreur = new Livreur();
        $form = $this->createForm(LivreurType::class, $livreur);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($livreur);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_admin_livreur_list');
        }
    
        // Créez une vue à partir du formulaire
        $formView = $form->createView();
    
        // Passez le FormView à votre modèle Twig
        return $this->render('AdminLivMat/ajouterLivreur.html.twig', [
            'livreur' => $livreur,
            'form' => $formView, // Utilisez le FormView ici
        ]);
    }

    
    #[Route('/admin/Livreurs/liste', name: 'app_admin_livreur_list')]
    public function modifierLivreur(Request $request,LivreurRepository $livreurRepository): Response
    {

        $livreurs=$livreurRepository->findAll();
        $sortBy = $request->query->get('sort_by');
        $searchQuery = $request->query->get('search_query');

        if ($searchQuery) {
            $livreurs = array_filter($livreurs, function(Livreur $livreur) use ($searchQuery) {
                return stripos($livreur->getNom(), $searchQuery) !== false;
            });
        }
    

        switch ($sortBy) {
            case 'name_asc':
                usort($livreurs, function($a, $b) { return strcmp($a->getNom(), $b->getNom()); });
                break;
            case 'name_desc':
                usort($livreurs, function($a, $b) { return strcmp($b->getNom(), $a->getNom()); });
                break;
            case 'availability_asc':
                usort($livreurs, function($a, $b) { return $a->getAvailability() - $b->getAvailability(); });
                break;
            case 'availability_desc':
                usort($livreurs, function($a, $b) { return $b->getAvailability() - $a->getAvailability(); });
                break;
            case 'email_asc':
                usort($livreurs, function($a, $b) { return strcmp($a->getEmail(), $b->getEmail()); });
                break;
            case 'email_desc':
                usort($livreurs, function($a, $b) { return strcmp($b->getEmail(), $a->getEmail()); });
                break;
          
            default:
   
                break;
        }
        
        return $this->render('AdminLivMat/listeLivreur.html.twig', [
            'livreurs' => $livreurs,
        ]);
    }


    #[Route('/admin/Livreurs/Supprimer/{id}', name: 'app_Livreur_supprimer')]
    public function deleteLivreur($id, LivreurRepository $livreursRepository, EntityManagerInterface $entityManager): Response
    {

        $livreurs = $livreursRepository->find($id);
            $entityManager->remove($livreurs);
            $entityManager->flush();
  

        return $this->redirectToRoute('app_admin_livreur_list');
    }

    #[Route('/admin/Livreurs/Modifier/{id}', name: 'app_livreurs_modifier')]
    public function editLivreur(Request $request, Livreur $livreur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LivreurType::class, $livreur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_livreur_list');
        }

        return $this->renderForm('AdminLivMat/modifierLivreurs.html.twig', [
            'livreur' => $livreur,
            'form' => $form,
        ]);
    }

/////////////////////////////NOTIFICATION///////////////////////////////

    // #[Route('/notification-stock-bas', name: 'notification_stock_bas')]
    // public function notificationStockBas(MaterielRepository $materielRepository)
    // {
    //     $materiels = $materielRepository->findAll();
    //   $LowstockM=20;
    //     $materielsLowStock = [];
    //     foreach ($materiels as $materiel) {
    //         if ($materiel->getQuantiteM() < $LowstockM) {
    //             $materielsLowStock[] = $materiel;
    //         }
    //     }

    //     // Retournez les matériels avec un stock bas
    //     return $this->json($materielsLowStock);
    // }

    #[Route('/notification-stock-bas', name: 'notification_stock_bas')]
    public function notificationStockBas(MaterielRepository $materielRepository, SerializerInterface $serializer)
    {
        $materiels = $materielRepository->findAll();
        $LowstockM = 20;
        $materielsLowStock = [];

        foreach ($materiels as $materiel) {
            if ($materiel->getQuantiteM() < $LowstockM) {
                // Nous créons ici un tableau avec les propriétés nécessaires pour éviter les références circulaires
                $materielsLowStock[] = [
                    'id' => $materiel->getId(),
                    'typeM' => $materiel->getTypeM(),
                    'descriptionM' => $materiel->getDescriptionM(),
                    'quantiteM' => $materiel->getQuantiteM(),
                    'dateexpM' => $materiel->getDateexpM()->format('Y-m-d'), // Formatage de la date
                    'statutM' => $materiel->getStatutM(),
                ];
            }
        }

        // Sérialisez les matériels avec un stock bas en utilisant un gestionnaire pour gérer les références circulaires
        $jsonContent = $serializer->serialize($materielsLowStock, 'json', [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object) {
                return $object['id']; // Retourne simplement l'ID pour éviter la référence circulaire
            }
        ]);

        // Retournez les données sérialisées
        return new JsonResponse($jsonContent, 200, [], true);
    }

}
