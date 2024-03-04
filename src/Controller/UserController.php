<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;



class UserController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    //create an index function
    #[Route('/user', name: 'app_user')]
    public function list(): Response
    {
        $users = $this->entityManager->getRepository(User::class)->findAll();

        // Exemple de rendu d'une vue avec les données récupérées depuis la base de données
        return $this->render('admin/user/userlist.html.twig', [
            'users' => $users,
        ]);
    }
   #[Route('/user/delete/{id}', name: 'app_delete')]
public function deleteAction(Request $request, EntityManagerInterface $entityManager, $id): Response // Added $id parameter to capture user id
{
    $user = $entityManager->getRepository(User::class)->find($id); // Find user by id
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $entityManager->remove($user);
    $entityManager->flush();
    return $this->redirectToRoute('app_logout');
}

#[Route('/user/edit/{id}', name: 'app_edit')]
public function editAction(Request $request, EntityManagerInterface $entityManager, $id): Response // Added $id parameter to capture user id
{
    $user = $entityManager->getRepository(User::class)->find($id); // Find user by id
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Update user fields
        $user->setType($form->get('type')->getData());
        $user->setName($form->get('name')->getData());
        $user->setLastName($form->get('lastName')->getData());
        $user->setAdresse($form->get('adresse')->getData());
        $user->setTelephone($form->get('telephone')->getData());
        $user->setGroupesanguin($form->get('groupesanguin')->getData());
        $user->setEmail($form->get('email')->getData());

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('app_logout');
    }

    return $this->render('admin/user/useredit.html.twig', [
        'UserType' => $form->createView(),
    ]);
}
}

