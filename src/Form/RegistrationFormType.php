<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                "label" => "Prénom",
                "attr" => ["placeholder" => "Votre prénom"]
            ])
            ->add('lastname', TextType::class, [
                "label" => "Nom de famille",
                "attr" => ["placeholder" => "Votre nom de famille"]
            ])
            ->add('adresse', TextType::class, [
                "label" => "Votre adresse",
                "attr" => ["placeholder" => "25 rue de la farfouille, Paris"]
            ])
                // daouda ajout de la proprié image 
                ->add('image', UrlType::class, [
                    'label' => 'Lien de votre image',
                    'attr'  => ['placeholder' => 'Coller un lien d\'image']   
                ])

            ->add('email', EmailType::class, [
                "label" => "Email",
                "attr"  => ["placeholder" => "Votre email"]
            ])
            ->add('age', IntegerType::class, [
                "label" => "Age",
                "attr"  => ["placeholder" => "25"]
            ])
            ->add('password', RepeatedType::class,[

                
                'type'=>PasswordType::class,
                'invalid_message'=>'Le mot de passe et la confirmation doit être identique', 
                'label'=>'Confirmez votre mot de passe',
                
                'required'=> true, 
                'first_options'=>[
                'label'=>'Mot de passe',
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre mot de passe.']], 
                'second_options'=>['label'=>'Confirmez votre mot de passe',
                
                'attr'=>[
                    'placeholder'=>'Merci de confirmer votre mot de passe.']
                ]
                
                ])

            
           
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
