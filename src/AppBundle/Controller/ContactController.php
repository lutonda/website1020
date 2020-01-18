<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 * @Route("/contacts")
 */
class ContactController extends Controller
{
    /**
     * @Route("/index", name="contact_index")
     */
    public function indexAction()
    {
        return $this->render('Contact/index.html.twig', array(
            // ...
        ));
    }

}
