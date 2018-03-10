<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class panierController extends Controller
{
    public function panierAction()
    {
        return $this->render('EcommerceBundle:Default:pages/layout/pages.html.twig.twig');
    }

    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default:pages/layout/livraison.html.twig');
    }

    public function validationAction()
    {
        return $this->render('EcommerceBundle:Default:pages/layout/pages.html.twig');
    }
}
