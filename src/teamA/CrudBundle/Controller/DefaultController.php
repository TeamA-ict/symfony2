<?php

namespace teamA\CrudBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('teamACrudBundle:Default:index.html.twig');
        return $this->render('teamACrudBundle:Default:parents.html.twig');
    }
}



/*class ParentController extends Controller
{
    public function indexAction()
    {
        return $this->render('teamACrudBundle:Default:parents.html.twig');
    }
}*/






