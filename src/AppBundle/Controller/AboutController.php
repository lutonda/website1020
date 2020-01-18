<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/about")
 */
class AboutController extends Controller
{
    /**
     * @Route("/index", name="about_index")
     */
    public function indexAction()
    {
        return $this->render('About/index.html.twig', array(
            // ...
        ));
    }

}
