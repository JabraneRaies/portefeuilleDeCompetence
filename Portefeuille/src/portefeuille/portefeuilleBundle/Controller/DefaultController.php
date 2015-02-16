<?php

namespace portefeuille\portefeuilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil" )
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('portefeuilleBundle:Default:index.html.twig');
    }
    /**
     * @Route("/cv", name="cv" )
     * @Template()
     */
    public function cvAction()
    {
        return $this->render('portefeuilleBundle:Default:cv.html.twig');
    }
    /**
     * @Route("/tp", name="tp" )
     * @Template()
     */
    public function tpAction()
    {
        return $this->render('portefeuilleBundle:Default:tp.html.twig');
    }
    /**
     * @Route("/stage", name="stage" )
     * @Template()
     */
    public function stageAction()
    {
        return $this->render('portefeuilleBundle:Default:stage.html.twig');
    }
}
