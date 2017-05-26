<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Forms;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validation;


class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use ($options) {
                $form = $event->getForm();
                $data = $event->getData();
                $form
                    ->add('nif', null, [
                        'label' => 'Nif:',
                        'constraints' => [
                            new Assert\Regex('/([A-Z a-z]{1}\d{8})|(\d{8}[A-Z a-z]{1})/')
                        ]
                    ])
                    ->add('nombre', null, [
                        'label' => 'Nombre:'
                    ])
                    ->add('apellidos', null, [
                        'label' => 'Apellidos:',
                        'required' => false
                    ])
                    ->add('direccion', null, [
                        'label' => 'Dirección:'
                    ])
                    ->add('codigoPostal', null, [
                        'label' => 'Código postal:'
                    ])
                    ->add('localidad', null, [
                        'label' => 'Localidad:'
                    ])
                    ->add('provincia', null, [
                        'label' => 'Provincia:'
                    ])
                    ->add('telefono', null , [
                        'label' => 'Telefono: (opcional)',
                        'required' => false
                    ])
                    ->add('email', EmailType::class, [
                        'label' => 'Correo electrónico: (opcional)',
                        'required' => false
                    ])
                    ->add('descuento', PercentType::class, [
                        'label' => 'Descuento:'
                    ]);
            });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
            'translation_domain' => false
        ]);
    }
}
