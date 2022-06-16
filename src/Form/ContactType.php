<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class,  [
                "label" => "Prénom",
                "attr"  => ["placeholder" => "Votre prénom"]
            ])
            ->add('lastName', TextType::class,  [
                "label" => "Nom",
                "attr"  => ["placeholder" => "Votre nom"]
            ]
            )
            ->add('email',  EmailType::class,  [
                "label" => "Email",
                "attr"  => ["placeholder" => "Votre email"]
            ])
            ->add('message', TextareaType::class,  [
               
                "attr"  => ["placeholder" => "Merci d\'écrire votre message ici ...........svp"]
            ])
            
            // ->add('submit', SubmitType::class,
            // [
            //     'label'=>"S'inscrire",
            // ] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}
