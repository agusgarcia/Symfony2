<?php

namespace Mmi\Bundle\BootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="bootstrap_homepage")
     */
    public function indexAction()
    {
        return $this->get('templating')->renderResponse('MmiBootstrapBundle:Default:index.html.twig');
    }
}
