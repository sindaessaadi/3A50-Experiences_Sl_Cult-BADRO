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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('heure', null, [
                'widget' => 'single_text',
            ])
            ->add('lieu', TextType::class)
            ->add('type', TextType::class)
            ->add('organisateurNom', TextType::class)
            ->add('nombreMaxParticipants', IntegerType::class)
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Upcoming' => 'A venir',
                    'Canceled' => 'Annulé',
                    'Ongoing' => 'en cours',
                    'Finished' => 'terminé',
                ],
            ])
            ->add('ticketPrix', TextType::class)
            ->add('periodeInscriptionFin', TextType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
