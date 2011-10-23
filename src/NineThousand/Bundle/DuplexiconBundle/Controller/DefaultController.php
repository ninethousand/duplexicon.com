<?php

namespace NineThousand\Bundle\DuplexiconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('NineThousandDuplexiconBundle:Default:index.html.twig', array());
    }
}
