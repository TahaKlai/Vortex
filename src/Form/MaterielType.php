<?php

namespace App\Form;

use App\Entity\Materiel;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('typeM', TextType::class, [
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le type de matériel ne peut pas être vide',
                ]),
            ],
        ])
            ->add('descriptionM')
            ->add('quantiteM')
            ->add('dateexpM')
            ->add('statutM')
            // ->add('photoM', FileType::class, [
            //     'label' => 'Photo du Materiel (JPG ou PNG file)',
            //     'mapped' => false, // Pour que le champ ne soit pas mappé directement à l'entité materiel
            //     'required' => false, // Rendre le champ facultatif
            // ])
            ->add('livreur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
        ]);
    }
}
