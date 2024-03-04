<?php

namespace App\Form;

use App\Entity\CentreDeDon;
use App\Entity\Stock;
use App\Repository\StockRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Regex;


class CentreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom',TextType::class,[
            'attr'=>[
'class'=> 'form-control',
'minlength'=>'2',
'maxlength'=>'50'
            ],
            'label'=>'nom du centre',
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
            ->add('adresse',TextType::class,[
                'attr'=>[
    'class'=> 'form-control',
    'minlength'=>'2',
    'maxlength'=>'50'
                ],
                'label'=>'adresse du centre',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Assert\Length(['min' =>2, 'max'=>50]),
                    new Assert\NotBlank(),
                   
                ]
            ])
            ->add('coordonnegeo',TextType::class,[
                'attr'=>[
    'class'=> 'form-control',
    'minlength'=>'2',
    'maxlength'=>'50'
                ],
                'label'=>'coordonnee geographique',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Assert\Length(['min' =>2, 'max'=>50]),
                    new Assert\NotBlank(),
                   
                ]
            ])
            ->add('contact',TextType::class,[
                'attr'=>[
    'class'=> 'form-control',
    'minlength'=>'2',
    'maxlength'=>'50'
                ],
                'label'=>'contact du centre',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'constraints'=>[
                    new Assert\Length(['min' =>2, 'max'=>50]),
                    new Assert\NotBlank(),
                   
                ]
            ])
            ->add('stock',EntityType::class, [
                
                'class' => Stock::class,
                'query_builder' => function (StockRepository $r) {
                    return $r->createQueryBuilder('i')
                        ->orderBy('i.type', 'ASC');
                },
                'label'=>'Type de stocks',
                'label_attr'=>[
                    'class'=>'form-label mt-4'
                ],
                'choice_label' => 'Type',
                'multiple' => true,
                'expanded' => true])



            ->add('submit',SubmitType::class,[
                'attr'=> [
                    'class'=>'btn btn-primary mt-4' 
                ],
                'label'=>'creer le centre'
    
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CentreDeDon::class,
        ]);
    }
}
