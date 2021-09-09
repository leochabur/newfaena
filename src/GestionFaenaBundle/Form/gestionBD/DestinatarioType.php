<?php

namespace GestionFaenaBundle\Form\gestionBD;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DestinatarioType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('comercial', 
                      EntidadComercialType::class, array(
                                                        'data_class' => 'GestionFaenaBundle\Entity\gestionBD\Destinatario',
                                                        'original' => $options['original']
                                ))
                ->add('guardar', SubmitType::class);
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                    'data_class' => 'GestionFaenaBundle\Entity\gestionBD\Destinatario',
                    'original' => null,
                ))
                ->setRequired('original');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionfaenabundle_gestionbd_destinatario';
    }


}
