<?php

namespace WND\SMVCP\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints;

class CreateSubscriberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add(
                'name',
                'text',
                [
                    'label' => 'Name',
                    'error_bubbling' => true,
                    'constraints' => [
                        new Constraints\NotBlank(),
                        new Constraints\Length(['max' => 255]),
                        new Constraints\Regex(
                            ['pattern' => '/^[\p{L}\d\s\.\-\_\@]+$/u']
                        ),
                    ],
                ]
            )
            ->add(
                'email',
                'email',
                [
                    'label' => 'Email',
                    'error_bubbling' => true,
                    'constraints' => [
                        new Constraints\NotBlank(),
                        new Constraints\Length(['max' => 255]),
                        new Constraints\Email(),
                    ]
                ]
            )
        ;
    }

    public function getName()
    {
        return "smvcp_create_subscriber";
    }
}
