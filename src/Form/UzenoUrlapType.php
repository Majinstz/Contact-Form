<?php

namespace App\Form;

use App\Entity\Uzeno;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class UzenoUrlapType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nev', TextType::class, [
                'attr' => [
                    'placeholder' => 'Név',
                    'class' => 'nevmezo'
                    ]
            ])
            ->add('email', EmailType::class)
            ->add('uzenet', TextAreaType::class, [
                'attr' => [
                    'placeholder' => 'Üzenet',
                    'class' => 'uzenetmezo'
                ]
            ])
            ->add('Kuldes', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Uzeno::class,
        ]);
    }
}
