<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\testType;

class TestController extends Controller
{
    public function testFormulaireAction()
    {
        $form = $this->createForm(new testType());

        if($this->get('request')->getMethod() == 'POST'){
            $form->bind($this->get('request'));
            var_dump($form->getData());
            //echo($form['email']->getData());

            $form = $this->createForm(new testType(),array('email'=>'test@devandclick.fr'));
        }

        return $this->render('EcommerceBundle:Default:test.html.twig', array('form' => $form->createView()));
    }
        /*

        //Déclaration du manager doctrine
        $em = $this->getDoctrine()->getManager();


        //Création d'un produit
        $produit = new Produits();
        $produit->setCategorie("Legume");
        $produit->setDescription("la tomate se mange");
        $produit->setDisponible("1");
        $produit->setImage("https://www.lesfruitsetlegumesfrais.com/_upload/cache/ressources/produits/tomate/tomate_-_copie_346_346_filled.jpg");
        $produit->setNom("Tomate");
        $produit->setPrix("0.99");
        $produit->setTva("19.6");
        $em->persist($produit);

        //Création d'un second produit
        $produit2 = new Produits();
        $produit2->setCategorie("Legume");
        $produit2->setDescription("le haricot se mange");
        $produit2->setDisponible("1");
        $produit2->setImage("http://img-3.journaldesfemmes.com/xfeGvFYZpaINN-6XIMYHT0l2210=/910x607/smart/b4809f1d5ee742e38b7238c7792fec5e/ccmcms-jdf/10364894.jpg");
        $produit2->setNom("Haricot");
        $produit2->setPrix("0.20");
        $produit2->setTva("19.6");
        $em->persist($produit2);

        //Ajout tout ce qui a été persist a la BD
        $em->flush();

        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();
        return $this->render('EcommerceBundle:Default:test.html.twig', array('produits'=>$produits));

    }
*/
}
