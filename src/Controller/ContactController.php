<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use DateTime;


class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {

        $form=$this->createform(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data=$form->getData();
           
            $adresse=$data['email'];
            $content=$data['content'];
            $objet=$data['objet'];
            
            

            // return $this->redirectToRoute('app_admin_livreur_list');
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
    
                
                $mail->setFrom('mahjoubisamir060@gmail.com', 'Livreur Registration Confirmation');
                $mail->addAddress( $adresse);     
    
                $mail->isHTML(true);      
                $mail->Subject = $objet;
                $mail->Body = $content;
    
                $mail->send();
               
            } catch (Exception $e) {
            
            }
        }

        return $this->renderForm('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formulaire' => $form,
        ]);
    }
}
