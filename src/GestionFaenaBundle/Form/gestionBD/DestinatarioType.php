<?php

namespace GestionFaenaBundle\Form\gestionBD;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class DestinatarioType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('guardar', SubmitType::class)
                ->add('listaPrecio');
        $original = $options['original'];

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($original){
                                                                                                $entidad = $event->getData();
                                                                                                $form = $event->getForm();

                                                                                                if (($entidad) && ($entidad->getId())) 
                                                                                                {
                                                                                                    $choices = ($entidad->getOriginal()?
                                                                                                                $entidad->getOriginal()->getAsociados():
                                                                                                                $entidad->getAsociados());

                                                                                                    
                                                                                                    $choices->add($entidad->getOriginal());

                                                                                                    $form->add('activa')
                                                                                                         ->add('comercial', 
                                                                                                               EntidadComercialType::class, 
                                                                                                               [
                                                                                                                    'data_class' => 'GestionFaenaBundle\Entity\gestionBD\Destinatario',
                                                                                                                    'original' => $original,
                                                                                                                    'choices' => $choices,
                                                                                                                    'edited' => true
                                                                                                                ]);
                                                                                                }
                                                                                                else
                                                                                                {
                                                                                                    $form->add('comercial', 
                                                                                                                EntidadComercialType::class, 
                                                                                                                [
                                                                                                                        'data_class' => 'GestionFaenaBundle\Entity\gestionBD\Destinatario',
                                                                                                                        'original' => $original
                                                                                                                ]);
                                                                                                }
                                                                                            });
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
