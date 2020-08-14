<?php

namespace App\Form;

use App\Entity\ParametroConfigurable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParametroConfigurableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parametro')
            ->add('valor')
            ->add('activo')
            ->add('tipo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ParametroConfigurable::class,
        ]);
    }
}