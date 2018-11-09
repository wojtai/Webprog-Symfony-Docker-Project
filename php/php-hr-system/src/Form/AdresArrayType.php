<?php
/**
 * Created by PhpStorm.
 * User: wojtek
 * Date: 08.11.18
 * Time: 19:03
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AdresArrayType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('prim')
            ->add('street')
            ->add('number')
            ->add('local',TextType::class, ['required'=>false])
            ->add('postalCode')
            ->add('town')
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            //'data_class' => TemporaryPersonalData::class,
        ]);
    }
}