<?php

namespace App\Controller;

use App\Repository\VolunteerRepository;
use App\Entity\Volunteer;

use App\Form\VolunteerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class VolunteerController extends AbstractController
{
    private $entityManager;
    private $volunteerRepository;

    public function __construct(EntityManagerInterface $entityManager, VolunteerRepository $volunteerRepository)
    {
        $this->entityManager = $entityManager;
        $this->volunteerRepository = $volunteerRepository;
    }

    #[Route('/volunteer/new', name: 'volunteer_new')]
    public function new(Request $request): Response
    {
        $volunteer = new Volunteer();
        $form = $this->createForm(VolunteerType::class, $volunteer);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $phoneNumber = $form->get('phone_number')->getData();
            if (!is_numeric($phoneNumber)) {
                $form->get('phone_number')->addError(new FormError('Le numéro de téléphone doit être un nombre positif.'));
                return $this->render('volunteer/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
    
            $this->entityManager->persist($volunteer);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('volunteer_show', ['id' => $volunteer->getIdV()]);
        }
    
        return $this->render('volunteer/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/volunteer/show', name: 'volunteer_show')]
    public function showVolunteers(): Response
    {
        $volunteers = $this->volunteerRepository->findAll();

        return $this->render('volunteer/list.html.twig', [
            'volunteers' => $volunteers,
        ]);
    }

    #[Route('/volunteer/{id}', name: 'volunteer_show_one')]
    public function showVolunteer(int $id): Response
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (!$volunteer) {
            throw $this->createNotFoundException('No volunteer found with id '.$id);
        }

        return $this->render('volunteer/show.html.twig', [
            'volunteer' => $volunteer,
        ]);
    }


    #[Route('/volunteer/remove/{id}', name: 'remove_volunteer')]
    public function removeVolunteer($id): Response
    {
        $volunteer = $this->volunteerRepository->find($id);
        if (!$volunteer) {
            throw $this->createNotFoundException('Volunteer not found');
        }
        
        $this->entityManager->remove($volunteer);
        $this->entityManager->flush();

        return $this->redirectToRoute('volunteer_show');
    }

    #[Route('/volunteer/{id}', name: 'update_volunteer')]
    public function updateVolunteer(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $volunteer = $entityManager->getRepository(Volunteer::class)->find($id);

        $query = $entityManager->createQuery(
            'UPDATE App\Entity\Volunteer v
            SET v.full_name = :full_name,
                v.volunteer_address = :volunteer_address,
                v.phone_number = :phone_number,
                v.email_address = :email_address,
                v.date_of_birth = :date_of_birth,
                v.occupation = :occupation,
                v.skills = :skills,
                v.availability = :availability
            WHERE v.id_v = :id'
        )
        ->setParameter('full_name', $request->request->get('full_name'))
        ->setParameter('volunteer_address', $request->request->get('volunteer_address'))
        ->setParameter('phone_number', $request->request->get('phone_number'))
        ->setParameter('email_address', $request->request->get('email_address'))
        ->setParameter('date_of_birth', new \DateTime($request->request->get('date_of_birth')))
        ->setParameter('occupation', $request->request->get('occupation'))
        ->setParameter('skills', $request->request->get('skills'))
        ->setParameter('availability', (bool) $request->request->get('availability'))
        ->setParameter('id', $id);

        $query->execute();

        return $this->redirectToRoute('volunteer_show', ['id' => $id]);
    }
}
