<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // app_lucky_index
        if (0 === strpos($pathinfo, '/lucky/number') && preg_match('#^/lucky/number/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_index')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::indexAction',));
        }

        // Fotos
        if ($pathinfo === '/photos') {
            return array (  '_controller' => 'AppBundle\\Controller\\Photos::photosAction',  '_route' => 'Fotos',);
        }

        if (0 === strpos($pathinfo, '/t')) {
            // testing
            if ($pathinfo === '/testing') {
                return array (  '_controller' => 'AppBundle\\Controller\\TestingController::indexAction',  '_route' => 'testing',);
            }

            // Tour
            if ($pathinfo === '/tour') {
                return array (  '_controller' => 'AppBundle\\Controller\\TourController::tourAction',  '_route' => 'Tour',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
