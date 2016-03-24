<?php

namespace PracticaBundle\InicioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class indexController extends Controller
{
    /**
     * @Route("/inicio",name="inicio")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('PracticaBundleInicioBundle:Inicio:index.html.twig');
    }
}
