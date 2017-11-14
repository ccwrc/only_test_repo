<?php

namespace ItemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('ItemBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/modal")
     */
    public function modalAction()
    {
        return $this->render('ItemBundle:Default:modal.html.twig');
    }   
    
    /**
     * @Route("/adminLte")
     */
    public function adminLteAction()
    {
        return $this->render('ItemBundle:Default:admin_lte.html.twig');
    }       
    
  
}
