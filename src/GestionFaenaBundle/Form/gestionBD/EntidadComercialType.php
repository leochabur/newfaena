<?php

namespace GestionFaenaBundle\Form\gestionBD;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class EntidadComercialType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $original = $options['original'];
        $edited = $options['edited'];

        $builder->add('entidad', 
                      EntidadExternaType::class, 
                      array(
                                'data_class' => 'GestionFaenaBundle\Entity\gestionBD\EntidadComercial',
                            ))
                ->add('tiposVenta')
                ->add('cuit')
                ->add('generaSanitario')
                ->add('esConsignatario')
                ->add('facturaIndividual')
                ->add('direccion');

        if ($edited)
        {
            $builder->add('titularSanitario', 
                          EntityType::class,
                          [
                            'class' =>'GestionFaenaBundle\Entity\gestionBD\EntidadComercial',
                            'choices' => $options['choices'],
                            'required' => false
                          ]);
        }

        if ($original)
        {
            $builder->add('original', EntityType::class,
                          [
                            'class' => 'GestionFaenaBundle\Entity\gestionBD\EntidadComercial',
                            'choices'  => [$original],
                          ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                    'inherit_data' => true,
                    'original' => false,
                    'edited' => false,
                    'choices' => []
                ))
                ->setRequired('original')
                ->setRequired('choices')
                ->setRequired('edited');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionfaenabundle_gestionbd_entidadcomercial';
    }


}
