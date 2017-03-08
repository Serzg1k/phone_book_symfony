<?php

namespace Sergey\PhoheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SergeyPhoheBundle:Default:index.html.twig');
    }
}
