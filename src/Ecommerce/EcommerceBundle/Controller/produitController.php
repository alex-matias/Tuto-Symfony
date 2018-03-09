<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class produitController extends Controller
{
    public function produitsAction()
    {
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig');
    }

    public function presentationAction()
    {
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig');
    }

}
