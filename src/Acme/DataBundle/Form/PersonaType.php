<?php

namespace Acme\DataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $builder
                    ->add('ci','text', array('label' => 'ci :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('nombre1','text', array('label' => 'nombre1 :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('nombre2','text', array('label' => 'nombre2 :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('apellido1','text', array('label' => 'apellido1 :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('apellido2','text', array('label' => 'apellido2 :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('fechaNac','date', array('label' => 'fechaNac :', 'attr' => array('class' => ''),'widget'=>'single_text'))    
                               
            
                    ->add('sexo','text', array('label' => 'sexo :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('img','file', array('label' => 'img :', 'attr' => array('class' => '')))
                               
            
                    ->add('tlfMovil','text', array('label' => 'tlfMovil :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('tlfFijo','text', array('label' => 'tlfFijo :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('email','email', array('label' => 'email :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('facebookId','text', array('label' => 'facebookId :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('twitterId','text', array('label' => 'twitterId :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('direccion','textarea', array('label' => 'direccion :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('bancoId','integer', array('label' => 'bancoId :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('nCuenta','text', array('label' => 'nCuenta :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('tCuenta','text', array('label' => 'tCuenta :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('usuarioId','integer', array('label' => 'usuarioId :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('ip','text', array('label' => 'ip :', 'attr' => array('class' => 'form-control')))
                               
            
                    ->add('dataId','integer', array('label' => 'dataId :', 'attr' => array('class' => 'form-control')))
                               
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DataBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_databundle_persona';
    }
}
