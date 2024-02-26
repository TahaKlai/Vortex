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
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
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
        return $this->renderForm('admin/ajouterMateriels.html.twig', [
            'materiel' => $materiel,
            'form' => $form,
        ]);
    }
    #[Route('/admin/Materiels/liste', name: 'app_admin_list')]
    public function modifierMateriels(MaterielRepository $materielRepository): Response
    {
        
        return $this->render('admin/listeMateriels.html.twig', [
            'materiels' => $materielRepository->findAll(),
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

        return $this->renderForm('admin/modifierMateriels.html.twig', [
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
        return $this->render('admin/ajouterLivreur.html.twig', [
            'livreur' => $livreur,
            'form' => $formView, // Utilisez le FormView ici
        ]);
    }

    
    #[Route('/admin/Livreurs/liste', name: 'app_admin_livreur_list')]
    public function modifierLivreur(LivreurRepository $livreurRepository): Response
    {
        
        return $this->render('admin/listeLivreur.html.twig', [
            'livreurs' => $livreurRepository->findAll(),
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

        return $this->renderForm('admin/modifierLivreurs.html.twig', [
            'livreur' => $livreur,
            'form' => $form,
        ]);
    }
}
