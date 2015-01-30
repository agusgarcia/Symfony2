<?php

namespace Mmi\Bundle\HelloBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/raw", name="hello_contact_raw")
     * @Method({"GET"})
     * 
     * Retourne une réponse avec un formulaire de contact html.
     * 
     * @return Response
     */
    public function rawAction()
    {
        $response = new Response();
        
        $content = '
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                    <label for="name">Your name:</label><br />
                    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
                    <label for="email">Your email:</label><br />
                    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
            </div>
            <div class="row">
                    <label for="message">Your message:</label><br />
                    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
            </div>
            <input id="submit_button" type="submit" value="Send email" />
        </form>		
        ';
        
        $response->setContent($content);
        
        return $response;
    }
    
    /**
     * @Route("/template", name="hello_contact_template")
     * @Method({"GET"})
     * 
     * Retourne une réponse avec un formulaire de contact html chargé depuis un fichier de template.
     * La méthode render() du service de templating est appelé via le composant d'injection de dépendance pour créer la vue.
     * Des paramètres issus de la requête sont envoyés à la vue.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function templateAction(Request $request)
    {
        $response = new Response();

        $templating = $this->container->get('templating');
        
        $content = $templating->render('MmiHelloBundle:Contact:template.html.twig', array(
            'name'    => $request->query->get('name'),
            'email'   => $request->query->get('email'),
            'message' => $request->query->get('message')
        ));
                
        $response->setContent( $content );
        
        return $response;
    }
}
