<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // test_page
        if (rtrim($pathinfo, '/') === '/index') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test_page');
            }

            return array (  '_controller' => 'teamA\\CrudBundle\\Controller\\DefaultController::indexAction',  '_route' => 'test_page',);
        }

        // parents_page
        if (rtrim($pathinfo, '/') === '/parents') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parents_page');
            }

            return array (  '_controller' => 'teamA\\CrudBundle\\Controller\\DefaultController::parentsAction',  '_route' => 'parents_page',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
