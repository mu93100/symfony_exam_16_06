<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
// use Symfony\Component\Validator\Constraints\IsTrue;
// use Symfony\Component\Validator\Constraints\Length;
// use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'N O M',
                'attr' => [
                    'placeholder' => 'N O M',
                    'class' => 'form-control'
                ]
            ])
            // ->add('role')
            ->add('plainPassword', PasswordType::class, [
                'label' => 'P A S S W O R D',
                'attr' => [
                    'placeholder' => 'P A S S W O R D',
                    'class' => 'form-control'
                ]
            ])
            ->add('email', EmailType::class,[
                'attr' => [
                    'class' => 'form-control ',
                    'placeholder' => 'E M A I L',            
            ]])
            ->add('address', TextType::class, [
                'label' => 'A D R E S S E',
                'attr' => [
                    'placeholder' => 'A D R E S S E',
                    'class' => 'form-control'
                ]
            ])
            ->add('phonenumber', TextType::class, [
                'label' => 'T E L E P H O N E',
                'attr' => [
                    'placeholder' => 'T E L E P H O N E',
                    'class' => 'form-control'
                ]
            ])
            ->add('userphoto', FileType::class, [
                'label' => 'Photo de profil',
                'mapped' => false, // important : ce champ n'est pas directement lié à l'entité
                'required' => false,
                'attr' => [
                    'placeholder' => 'P H O T O',
                    'accept' => 'image/*'],
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
