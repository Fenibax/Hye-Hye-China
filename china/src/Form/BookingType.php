<?php

namespace App\Form;

use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('beginAt', DateTimeType::class, [
                'widget' => 'single_text',
         //       'attr' => ['class' => 'js-datepicker'],
                'label' => 'Date de début de réservation'
         //       'attr' => array( 'placeholder' => '01/12/2020' )
         ])
            ->add('endAt', DateTimeType::class, [
                'widget' => 'single_text',
        //        'attr' => ['class' => 'js-datepicker'],
                'label' => 'Date de fin de réservation'
         ])
            ->add('title')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
