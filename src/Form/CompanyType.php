<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom_c', TextType::class, [
                'label' => 'Nom de Compagnie',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom de la compagnie est requis.']),
                    new Assert\Length([
                        'max' => 255,
                        'maxMessage' => 'Le nom de la compagnie ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('Adresse', TextType::class, [
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
            ->add('Num_tel', NumberType::class, [
                'label' => 'Numéro de Téléphone',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro de téléphone est requis.']),
                    new Assert\Positive(['message' => 'Le numéro de téléphone doit être un nombre positif.']),
                   // new Assert\Type(['type' => 'integer', 'message' => 'Le numéro de téléphone doit être un nombre entier.']),
                ],
            ])
         
            ->add('mail', EmailType::class, [
                'label' => 'Adresse E-mail',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse e-mail est requise.']),
                    new Assert\Email(['message' => 'Veuillez saisir une adresse e-mail valide.']),
                ],
            ])
            ->add('Site_Web', UrlType::class, [
                'label' => 'Site Web',
                'required' => false,
                'constraints' => [
                    new Assert\Url(['message' => 'Veuillez saisir une URL valide pour le site web.']),
                ],
            ])
            ->add('Pays_c', TextType::class, [
                'label' => 'Pays d\'Origine',
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le pays ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('Description_c', TextType::class, [
                'label' => 'Description de Compagnie',
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'La description de la compagnie doit comporter au moins {{ limit }} caractères.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
