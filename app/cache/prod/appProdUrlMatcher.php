<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Igor\\TestBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Igor\\TestBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Igor\\TestBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
