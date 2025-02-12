<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_event')
            ->add('titre')
            ->add('description')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('heure', null, [
                'widget' => 'single_text',
            ])
            ->add('lieu')
            ->add('type')
            ->add('organisateur_nom')
            ->add('nombre_max_participants')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Upcoming' => 'A venir',
                    'Canceled' => 'Annulé',
                    'Ongoing' => 'en cours',
                    'Finished' => 'terminé',
                ],
            ])
            ->add('ticket_prix')
            ->add('periode_inscription_fin')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
