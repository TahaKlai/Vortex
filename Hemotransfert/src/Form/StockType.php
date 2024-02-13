<?php

namespace App\Form;

use App\Entity\Stock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Regex;
class StockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type',TextType::class,[
                'attr'=>[
'class'=> 'form-control',
'minlength'=>'2',
'maxlength'=>'50'
                ],
                'label'=>'Type de sang',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Assert\Length(['min' =>2, 'max'=>50]),
                    new Assert\NotBlank(),
                    new Regex([
                        'pattern' => '/^[A-Za-z]+$/',
                        'message' => 'Only letters are allowed.']),
                ]
            ])


            ->add('quantite',IntegerType::class,[
                'attr'=>[
'class'=> 'form-control',

                ],
                'label'=>'quantite de sang',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Range(['min' => 1]),
                    new Assert\NotBlank(),
                    new Assert\Positive()
                ]
            ])
            ->add('etat',TextType::class,[
                'attr'=>[
'class'=> 'form-control',
'minlength'=>'2',
'maxlength'=>'50'
                ],
                'label'=>'etat de sang',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Assert\Length(['min' =>2, 'max'=>50]),
                    new Assert\NotBlank(),
                    new Type(['type' => 'string']),
                    new Regex([
                        'pattern' => '/^[A-Za-z]+$/',
                        'message' => 'Only letters are allowed.']),
                ]
            ])
            ->add('origine',TextType::class,[
                'attr'=>[
'class'=> 'form-control',
'minlength'=>'2',
'maxlength'=>'50'
                ],
                'label'=>'nom et prenom',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Assert\Length(['min' =>2, 'max'=>50]),
                    new Assert\NotBlank(),
                    new Type(['type' => 'string']),
                    new Regex([
                        'pattern' => '/^[A-Za-z]+$/',
                        'message' => 'Only letters are allowed.']),
                ]
            ])
       
        ->add('submit',SubmitType::class,[
            'attr'=> [
                'class'=>'btn btn-primary mt-4' 
            ],
            'label'=>'creer le stock'

        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stock::class,
        ]);
    }
}
