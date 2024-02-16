<?php

namespace App\Form;

use App\Entity\Volunteer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VolunteerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('full_name', TextType::class, [
                'label' => 'Nom Complet',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom complet est requis.']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Le nom complet ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('volunteer_address', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse est requise.']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'L\'adresse ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('phone_number', NumberType::class, [
                'label' => 'Numéro de Téléphone',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro de téléphone est requis.']),
                    new Assert\Positive(['message' => 'Le numéro de téléphone doit être un nombre positif.']),
                ],
            ])
            ->add('email_address', EmailType::class, [
                'label' => 'Adresse E-mail',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse e-mail est requise.']),
                    new Assert\Email(['message' => 'Veuillez saisir une adresse e-mail valide.']),
                ],
            ])
            ->add('date_of_birth', DateType::class, [
                'label' => 'Date de naissance',
                'required' => true,
                'years' => range(date('Y') - 100, date('Y')),
            ])
            ->add('occupation', TextType::class, [
                'label' => 'Profession',
                'required' => true,
            ])
            ->add('skills', TextareaType::class, [
                'label' => 'Compétences',
                'required' => false,
            ])
            ->add('availability', ChoiceType::class, [
                'choices' => [
                    'Disponible' => true,
                    'Non disponible' => false,
                ],
                'placeholder' => 'Choisissez la disponibilité',
                'label' => false, 
                'required' => true,
            ]);
   
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Volunteer::class,
        ]);
    }
}
