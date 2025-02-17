<?php
namespace App\Form;

use App\Entity\Matching;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MatchingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Add 'score_compatibilite' with appropriate validation constraints
        $builder
            ->add('score_compatibilite', NumberType::class, [
                'required' => true,
                'attr' => ['min' => 0, 'max' => 100],  // min and max constraints for score
                'help' => 'The score must be between 0 and 100.',  // Help text for clarity
            ])
            
            // Add 'status' with validation for minimum length of 5
            ->add('status', TextType::class, [
                'required' => true,
                'attr' => ['maxlength' => 255],  // Limit max length for status
                'help' => 'Status must be at least 5 characters long.'
            ])
            
            // Add 'date_matching' with single text widget
            ->add('date_matching', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => false, // If date_matching is optional
            ])

            // Optionally, add a submit button
            ->add('submit', SubmitType::class, [
                'label' => 'Save Matching'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matching::class,  // Linking this form to the Matching entity
        ]);
    }
}
