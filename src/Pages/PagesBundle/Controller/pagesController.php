<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pagesController extends Controller
{
    public function pageAction($id)
    {
        return $this->render('PageBundle:Default:pages/layout/pages.html.twig');
    }
}
