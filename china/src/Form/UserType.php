<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $password = $options['data']->getPassword();
        $builder
            ->add('prenom')
            ->add('nom')
            ->add('email')
            //      ->add('roles')
            ->add('password', HiddenType::class, [
                'data' => $password,
            ])

            ->add('confirmPassword', HiddenType::class, [
                'data' => $password,
            ])

            ->add('tel')
            ->add('password', PasswordType::class)
            ->add('confirmPassword', PasswordType::class)
            //        ->add('bookings', Booking::class, ['mapped' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
