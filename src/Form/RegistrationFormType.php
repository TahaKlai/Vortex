<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                    'placeholder' => 'nom', // Ajoutez le placeholder si nécessaire
                ],
            ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                    'placeholder' => 'prenom', // Ajoutez le placeholder si nécessaire
                ],
            ])
            ->add('telephone', TextType::class, [
                'attr' => [
                    'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                    'placeholder' => 'telephone', // Ajoutez le placeholder si nécessaire
                ],
            ])
            ->add('adresse', TextType::class, [
                'attr' => [
                    'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                    'placeholder' => 'adresse', // Ajoutez le placeholder si nécessaire
                ],
            ])
            ->add('groupesanguin', ChoiceType::class, [
                'choices' => [
                    'A+' => 'A+',
                    'A-' => 'A-',
                    'B+' => 'B+',
                    'B-' => 'B-',
                    'AB+' => 'AB+',
                    'AB-' => 'AB-',
                    'O+' => 'O+',
                    'O-' => 'O-',
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'male' => 'male',
                    'female' => 'female',
                ],
                'attr' => ['class' => 'form-control']

            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                    'placeholder' => 'email', // Ajoutez le placeholder si nécessaire
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                    'placeholder' => 'password',
                ] // Ajoutez le placeholder si nécessaire
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}