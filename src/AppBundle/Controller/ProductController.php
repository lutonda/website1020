<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/product")
 */
class ProductController extends Controller
{
    /**
     * @Route("/index", name="product_index")
     */
    public function indexAction()
    {
        return $this->render('Product/index.html.twig', array(
            // ...
        ));
    }

}