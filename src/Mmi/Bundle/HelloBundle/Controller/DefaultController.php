<?php

namespace Mmi\Bundle\HelloBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello", name="hello_homepage")
     * @Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        $name = $request->query->get('name', null);
        
        $response = new Response();
        
        if(null !== $name) {
            $response->setContent(sprintf('<h1>Bonjour %s</h1>', $name));
            $response->setStatusCode(200);
        }
        else {
            $response->setContent('<h1>Page non trouvée</h1>');
            $response->setStatusCode(404);
        }
        
        $response->headers->set('Content-Type', 'text/html');
        
        return $response;
    }
}
