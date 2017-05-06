<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class ObservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateRecord', DateTimeType::class, array(
                'widget' => 'single_text',
                'label' => "Date d'enregistrement",
                'format' => 'dd MMMM yyyy',
                'attr' => array('readonly' => 'readonly'),
            ))
            ->add('dateObservation', DateTimeType::class, array(
                'widget' => 'single_text',
                'format' => 'dd MMMM yyyy',
            ))
            ->add('title')
            ->add('gpsLatitude', NumberType::class, array(
                'scale' => 6,
            ))
            ->add('gpsLongitude', NumberType::class, array(
                'scale' => 6,
            ))
            ->add('status', ChoiceType::class, array(
                'choices' => array(
                    'En attente' => 'waiting',
                    'Validée' => 'valid',
                    'Rejetée' => 'reject',
                ),
                'label' => 'Status',
                'expanded' => true,
                'multiple' => false,
                'required' => true,
            ))
            ->add('description')
/*            ->add('approuvedBy')
            ->add('espece')
            ->add('author')*/
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Observation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_observation';
    }


}
