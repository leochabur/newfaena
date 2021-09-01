<?php

namespace GestionVentasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class NumeracionRemitoType extends AbstractType
{


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cai')
                ->add('vencimiento', DateType::class, ['widget' => 'single_text'])
                ->add('ultimoUtilizado')
                ->add('tipo', ChoiceType::class, [
                                                            'choices'  => [
                                                                'Remito' => 'Remito'
                                                            ],
                        ])
                ->add('guardar', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionVentasBundle\Entity\NumeracionRemito'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionventasbundle_numeracionremito';
    }


}
