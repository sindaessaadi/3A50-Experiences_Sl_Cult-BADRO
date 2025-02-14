<?php

namespace App\Form;

use App\Entity\User;
use App\Enum\RoleEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType; 
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['maxlength' => 50],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['maxlength' => 50],
            ])
            ->add('email_user', EmailType::class, [
                'label' => 'Email',
                'attr' => ['maxlength' => 255],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Mot de Passe',
                    'attr' => ['minlength' => 8],
                ],
                'second_options' => [
                    'label' => 'Confirmer Mot de Passe',
                    'attr' => ['minlength' => 8],
                ],
            ])
            ->add('date_naissance', DateType::class, [
                'label' => 'Date de Naissance',
                'widget' => 'single_text',
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => ['pattern' => '^\d{8,15}$'],
            ])
            ->add('role', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => [
                    'Étudiant' => RoleEnum::ETUDIANT,
                    'Institution' => RoleEnum::INSTITUTION,
                    'Admin' => RoleEnum::ADMIN,
                ],
                'expanded' => false,
                'placeholder' => 'Sélectionnez votre rôle',
            ])
            ->add('nom_institution', TextType::class, [
                'label' => 'Institution',
                'required' => false,
                'attr' => ['maxlength' => 100],
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'inscrire",
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
