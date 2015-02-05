<?php

namespace portefeuille\portefeuilleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class contactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('label'=>'Nom','attr'=> array('class'=>'form-control')))
            ->add('prenom','text',array('label'=>'Prenom','attr'=> array('class'=>'form-control')))
            ->add('numero','text',array('label'=>'Numero de téléphone','attr'=> array('class'=>'form-control')))
            ->add('email','text',array('label'=>'E-mail','attr'=> array('class'=>'form-control')))
            ->add('message','text',array('label'=>'Message','attr'=> array('class'=>'form-control')))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'portefeuille\portefeuilleBundle\Entity\contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'portefeuille_portefeuillebundle_contact';
    }
}
