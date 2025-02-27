<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Preferences;
use Symfony\Component\Validator\Constraints as Assert;

class PreferencesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Country', ChoiceType::class, [
            'choices' => ['France' => 'France', 'Austria' => 'Austria', 'Italy' => 'Italy'],
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select at least one country.'])],
        ]);

        $builder->add('Domain', ChoiceType::class, [
            'choices' => [
                'Philosophy' => 'Philosophy',
                'Information and communication' => 'Information and communication',
            ],
            'expanded' => true,
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select at least one domain.'])],
        ]);

        $builder->add('Preferred_Language', ChoiceType::class, [
            'choices' => ['French' => 'French', 'English' => 'English', 'Arabic' => 'Arabic'],
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select at least one language.'])],
        ]);

        $builder->add('Teaching_Mode', ChoiceType::class, [
            'choices' => ['Online' => 'Online', 'In-person classes' => 'In-person classes'],
            'expanded' => true,
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select a teaching mode.'])],
        ]);

        $builder->add('University_Type', ChoiceType::class, [
            'choices' => ['Public university' => 'Public university', 'Private university' => 'Private university'],
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select at least one university type.'])],
        ]);

        $builder->add('Cultural_Activities', ChoiceType::class, [
            'choices' => [
                'Volunteering' => 'Volunteering',
                'Visiting a museum' => 'Visiting a museum',
            ],
            'expanded' => true,
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select at least one cultural activity.'])],
        ]);

        $builder->add('climat_pref', ChoiceType::class, [
            'label' => 'Preferred Climate',
            'choices' => [
                'Tropical' => 'Tropical',
                'Temperate' => 'Temperate',
                'Arid' => 'Arid',
                'Cold' => 'Cold',
            ],
            'expanded' => true,
            'multiple' => false,
            'constraints' => [new Assert\NotBlank(['message' => 'Please select a preferred climate.'])],
        ]);

        $builder->add('Language_Level', TextType::class, [
            'required' => false,
            'attr' => ['placeholder' => 'Enter language level'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'Please enter a language level.']),
                new Assert\Regex([
                    'pattern' => '/^(A1|A2|B1|B2|C1|C2)$/',
                    'message' => 'Language level must be A1, A2, B1, B2, C1, or C2.',
                ]),
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => Preferences::class]);
    }
}
