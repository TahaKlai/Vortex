<?php

namespace App\Form;

use App\Entity\Demandededon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemandededonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ID_Demande')
            ->add('ID_Donateur')
            ->add('datedemande')
            ->add('typededon')
            ->add('quantitedemande')
            ->add('statusdemande')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demandededon::class,
        ]);
    }
}
