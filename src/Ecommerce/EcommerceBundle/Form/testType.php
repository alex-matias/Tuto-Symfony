<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class  testType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //Ici nous allons faire notre formulaire en PHP
        $builder->add('email','email')
                ->add('nom','text')
                ->add('prenom','text')
                ->add('sexe','choice',array('choices'=>array('0' =>'Homme',
                                                                         '1' =>'Femme',
                                                                         '2' => 'Autre'),'preferred_choices'=>array('0','1')))
                ->add('contenu','textarea')
                ->add('utilisateurs','entity',array('class'=>'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
                ->add('date','date')
                ->add('pays','country')
                ->add('envoyer','submit');
    }

    public function getName()
    {
        // TODO: Implement getName() method.
        return 'ecommerce_ecommercebundle_test';
    }
}
?>