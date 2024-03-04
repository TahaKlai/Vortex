<?php

namespace App\Form;

use App\Entity\Actualites;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class ActualitesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('id', IntegerType::class, [
            'attr' => [
                'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
                'placeholder' => 'id', // Ajoutez le placeholder si nécessaire
            ],
        ])


    ->add('titre', TextType::class, [
        'attr' => [
            'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
            'placeholder' => 'Titre', // Ajoutez le placeholder si nécessaire
        ],
    ])
    ->add('date', DateType::class, [
        'label' => 'Date de publication',
    ])
    ->add('priorite', ChoiceType::class, [
        'label' => 'Priorité',
        'choices' => [
            'Basse' => 'Basse',
            'Moyenne' => 'Moyenne',
            'Haute' => 'Haute',
        ],
        'attr' => ['class' => 'form-control']
    ])
    ->add('categorie', TextType::class, [
        'attr' => [
            'class' => 'form-control mb-3', // Ajoutez les classes HTML personnalisées ici
            'placeholder' => 'categorie', // Ajoutez le placeholder si nécessaire
        ],
    ])
    ->add('discription', TextareaType::class, [
        'label' => 'Description',
        'attr' => [
            'class' => 'form-control', // Utilisez la classe form-control de Bootstrap pour une zone de texte stylisée
            'rows' => '6', // Définir le nombre de lignes pour la zone de texte
            'placeholder' => 'Ajouter une description' // Placeholder pour donner des indications à l'utilisateur
        ]
        ]);
 

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actualites::class,
        ]);
    }
}
