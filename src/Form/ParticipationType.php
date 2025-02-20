<?php

namespace App\Form;

use App\Entity\Participation;
use App\Entity\Evenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_participant')
            ->add('telephone_number')
            ->add('paiment_method', ChoiceType::class, [
                'choices' => [
                    'Credit Card' => 'credit_card',
                    'PayPal' => 'paypal',
                    'Bank Transfer' => 'bank_transfer',
                ],
                'expanded' => true, 
                'multiple' => false, 
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Participation::class,
        ]);
    }
}
