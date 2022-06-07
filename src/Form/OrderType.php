<?php

namespace App\Form;

use App\Entity\Order;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('depart', TextType::class, [
                "label" => "Saisir une adresse de départ",
                "attr"  => ["placeholder" => "Départ Paris"]
            ])
            ->add('destination', TextType::class, [
                "label" => "Saisir une adresse de destination",
                "attr"  => ["placeholder" => "25 Rue de la République à Marseille"]
            ])
            ->add('date_reservation', DateType::class, [
                "label" => "Saisir une date de réservation",
                "attr"  => ["placeholder" => "01 Janvier 2022 à 04h00"]
            ])
            //->add('date_creation')
            // ->add('user_id')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
