<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/services")
 */
class ServicesController extends Controller
{
    /**
     * @Route("/index", name="services_index")
     */
    public function indexAction()
    {
        return $this->render('Services/index.html.twig', array(
            // ...
        ));
    }

}
