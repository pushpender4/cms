<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class layoutController extends FrontendController
{


    public function defaultAction(Request $request): Response
    {
         return $this->render('default/default.html.twig');
    }   
     /**
      * @Route("/product", name="product_page")
      */
    public function productAction(Request $request)
    {
        return $this->render('content/product.html.twig');
    }
    public function product1Action(Request $request)
    {
        return $this->render('content/product1.html.twig');
    }
    public function layoutAction(Request $request)
    {
        return $this->render('layout/home.html.twig');
    }

    /**
     * @Route("/contact", name="contact_page")
     */
    public function contactAction(Request $request)
    {
        return $this->render('layout/contact-us.html.twig');
    }
    /**
     * @Route("/about", name="about_page")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('layout/about-us.html.twig');
    }

    public function detailAction(Request $request)
    {
        return $this->render('layout/detail.html.twig');
    }
    public function listingAction(Request $request)
    {
        return $this->render('layout/listing.html.twig');
    }
}

#above routes are optional if you want certain action to be performed on certain routes that's where you can use these routes
# we don't need to define these routes if we are creating documents in pimcore 
# make sure to import above class for routing use Symfony\Component\Routing\Annotation\Route;
# the @Route annotation is used to define the route for a controller method. When you import Symfony\Component\Routing\Annotation\Route, you're essentially telling PHP that you want to use the @Route annotation class from the Symfony Routing component.

#e.g. our document name is home it will be accessed like www.pimcoredempo.com/home like this.......
