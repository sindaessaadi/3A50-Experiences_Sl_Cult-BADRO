<?php

namespace App\Form;

use App\Entity\Experience;
use App\Entity\Reply;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_user')
            ->add('contenu')
           
            ->add('id_exp', EntityType::class, [
                'class' => Experience::class,
                'choice_label' => function (Experience $experience) {
                    return $experience->getTitre();
                },
                'label' => 'Titre', // This changes the displayed label in the form
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reply::class,
        ]);
    }
}
