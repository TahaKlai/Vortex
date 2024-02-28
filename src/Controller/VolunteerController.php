<?php

namespace App\Controller;

use App\Repository\VolunteerRepository;
use App\Entity\Volunteer;
use App\Entity\Company;
use App\Form\VolunteerType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use DateTime;


class VolunteerController extends AbstractController
{
    private $entityManager;
    private $volunteerRepository;

    public function __construct(EntityManagerInterface $entityManager, VolunteerRepository $volunteerRepository)
    {
        $this->entityManager = $entityManager;
        $this->volunteerRepository = $volunteerRepository;
    }

    #[Route('/admin/volunteer/new', name: 'volunteer_new')]
    public function new(Request $request): Response
    {
        $volunteer = new Volunteer();
        $form = $this->createForm(VolunteerType::class, $volunteer);
        $form->handleRequest($request);
        $volunteers = $this->getDoctrine()->getRepository(Volunteer::class)->findAll();
    
        if ($form->isSubmitted() && $form->isValid()) {
            $phoneNumber = $form->get('phone_number')->getData();
            if (!is_numeric($phoneNumber)) {
                $form->get('phone_number')->addError(new FormError('Le numéro de téléphone doit être un nombre positif.'));
                return $this->render('admin/volunteer/new.html.twig', [
                    'form' => $form->createView(),
                    'volunteer' => $volunteer,
                    'volunteers' => $volunteers,
                ]);
            }
    
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($volunteer);
            $entityManager->flush();
    
        
            $mail = new PHPMailer(true);
    
            try {
            
                $mail->SMTPDebug = false;   
                $mail->isSMTP();            
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;    
                $mail->Username = 'mahjoubisamir060@gmail.com';   
                $mail->Password = 'cjiu tjod kihl ebuu';   
                $mail->SMTPSecure = 'tls';  
                $mail->Port = 587;          
    
                
                $mail->setFrom('mahjoubisamir060@gmail.com', 'Volunteer Registration Confirmation');
                $mail->addAddress($volunteer->getEmailAddress());     
    
                $mail->isHTML(true);      
                $mail->Subject = 'Volunteer Registration Confirmation';
                $mail->Body = $this->renderView(
                    'admin/volunteer/volunteer_registration_email.html.twig',
                    ['volunteer' => $volunteer]
                );
    
                $mail->send();
                return $this->redirectToRoute('volunteer_show', ['id' => $volunteer->getIdV()]);
            } catch (Exception $e) {
                return $this->redirectToRoute('volunteer_show', ['id' => $volunteer->getIdV()]);
            }
        }
    
        return $this->render('admin/volunteer/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/admin/volunteer/show', name: 'volunteer_show')]
    public function showVolunteers(Request $request): Response
    {
        $sortBy = $request->query->get('sort_by');
        $searchQuery = $request->query->get('search_query');
    
        // Fetch volunteers data from the repository
        $volunteers = $this->volunteerRepository->findAll();
    
        // Apply search filter if search query is provided
        if ($searchQuery) {
            $volunteers = array_filter($volunteers, function(Volunteer $volunteer) use ($searchQuery) {
                return stripos($volunteer->getFullName(), $searchQuery) !== false;
            });
        }
    
        // Sorting logic based on the selected option
        switch ($sortBy) {
            case 'name_asc':
                usort($volunteers, function($a, $b) { return strcmp($a->getFullName(), $b->getFullName()); });
                break;
            case 'name_desc':
                usort($volunteers, function($a, $b) { return strcmp($b->getFullName(), $a->getFullName()); });
                break;
            case 'availability_asc':
                usort($volunteers, function($a, $b) { return $a->getAvailability() - $b->getAvailability(); });
                break;
            case 'availability_desc':
                usort($volunteers, function($a, $b) { return $b->getAvailability() - $a->getAvailability(); });
                break;
            case 'email_asc':
                usort($volunteers, function($a, $b) { return strcmp($a->getEmailAddress(), $b->getEmailAddress()); });
                break;
            case 'email_desc':
                usort($volunteers, function($a, $b) { return strcmp($b->getEmailAddress(), $a->getEmailAddress()); });
                break;
            case 'birthdate_asc':
                usort($volunteers, function($a, $b) {
                    return strtotime($a->getDateOfBirth()->format('Y-m-d')) - strtotime($b->getDateOfBirth()->format('Y-m-d'));
                });
                break;
            case 'birthdate_desc':
                usort($volunteers, function($a, $b) {
                    return strtotime($b->getDateOfBirth()->format('Y-m-d')) - strtotime($a->getDateOfBirth()->format('Y-m-d'));
                });
                break;
            default:
                // No sorting or default sorting logic
                break;
        }
    
        return $this->render('admin/volunteer/list.html.twig', [
            'volunteers' => $volunteers,
        ]);
    }
    #[Route('/admin/volunteer/{id}', name: 'volunteer_show_one', requirements: ['id' => '\d+'])]
    public function showVolunteer(int $id, Request $request): Response
    {
    $volunteer = $this->volunteerRepository->find($id);
	
$repository = $this->getDoctrine()->getRepository(Company::class);
$available_Companies = $repository->findAll();
$associated_Companies = $volunteer->getCompanies();
    if (!$volunteer) {
        throw $this->createNotFoundException('No volunteer found with id '.$id);
    }

    $form = $this->createForm(VolunteerType::class, $volunteer);
    
    $form->handleRequest($request); 

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($volunteer);
        $entityManager->flush();

        return $this->redirectToRoute('volunteer_show_one', ['id' => $id]);
    }

    return $this->render('admin/volunteer/show.html.twig', [
        'volunteer' => $volunteer,
        'form' => $form->createView(),
		'available_Companies' => $available_Companies,
    ]);
}



    #[Route('/admin/volunteer/remove/{id}', name: 'remove_volunteer')]
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

   #[Route('/admin/volunteer/{id}', name: 'update_volunteer')]
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

    #[Route('/admin/volunteer/volunteer_Statistics', name: 'volunteer_Statistics')]
    public function volunteer_Statistics(VolunteerRepository $volunteerRepository): Response
    {
        // Retrieve all volunteers from the repository
        $volunteers = $volunteerRepository->findAll();
        
        // Check if there are any volunteers
        if (empty($volunteers)) {
            // Handle the case where there are no volunteers
            return $this->render('admin/volunteer/stat.html.twig', [
                'total_volunteers' => 0,
                'dataPointsAvailability' => json_encode([]), // Pass an empty array as JSON string for availability
                'dataPointsAge' => json_encode([]), // Pass an empty array as JSON string for age
            ]);
        }
    
        // Initialize variables to count volunteers in different availability and age ranges
        $availableCount = 0;
        $unavailableCount = 0;
        $ageUnder18Count = 0; // New variable to count volunteers under 18
        $age18To50Count = 0;
        $over60Count = 0;
    
        // Get current date for calculating age
        $currentDate = new DateTime();
    
        // Iterate through volunteers to calculate age and count in each availability and age range
        foreach ($volunteers as $volunteer) {
            // Count availability
            if ($volunteer->getAvailability() != 0) {
                $availableCount++;
            } else {
                $unavailableCount++;
            }
            
            // Calculate age
            $dateOfBirth = $volunteer->getDateOfBirth();
            if ($dateOfBirth instanceof DateTime) {
                $age = $currentDate->diff($dateOfBirth)->y; // Calculate age
                
                // Count age range
                if ($age < 18) { // Volunteers under 18
                    $ageUnder18Count++;
                } elseif ($age >= 18 && $age <= 50) {
                    $age18To50Count++;
                } elseif ($age > 60) {
                    $over60Count++;
                }
            }
        }
    
        // Prepare data for the graph (availability)
        $dataPointsAvailability = [
            ['label' => 'Available', 'y' => $availableCount],
            ['label' => 'Unavailable', 'y' => $unavailableCount]
        ];
    
        // Prepare data for the graph (age)
        $dataPointsAge = [
            ['label' => 'Age < 18', 'y' => $ageUnder18Count], // New age group
            ['label' => 'Age 18-50', 'y' => $age18To50Count],
            ['label' => 'Age 60+', 'y' => $over60Count]
        ];
    
        // Total number of volunteers
        $totalVolunteers = count($volunteers);
    
        return $this->render('admin/volunteer/stat.html.twig', [
            'total_volunteers' => $totalVolunteers,
            'dataPointsAvailability' => json_encode($dataPointsAvailability), // Pass dataPoints for availability as a JSON string
            'dataPointsAge' => json_encode($dataPointsAge) // Pass dataPoints for age as a JSON string
        ]);
    }
    
    



}