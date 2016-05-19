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

        if (0 === strpos($pathinfo, '/estancia')) {
            // estancia_index
            if (rtrim($pathinfo, '/') === '/estancia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estancia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estancia_index');
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\EstanciaController::indexAction',  '_route' => 'estancia_index',);
            }
            not_estancia_index:

            // estancia_show
            if (preg_match('#^/estancia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estancia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estancia_show')), array (  '_controller' => 'alex\\yamBundle\\Controller\\EstanciaController::showAction',));
            }
            not_estancia_show:

            // estancia_new
            if ($pathinfo === '/estancia/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estancia_new;
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\EstanciaController::newAction',  '_route' => 'estancia_new',);
            }
            not_estancia_new:

            // estancia_edit
            if (preg_match('#^/estancia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estancia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estancia_edit')), array (  '_controller' => 'alex\\yamBundle\\Controller\\EstanciaController::editAction',));
            }
            not_estancia_edit:

            // estancia_delete
            if (preg_match('#^/estancia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estancia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estancia_delete')), array (  '_controller' => 'alex\\yamBundle\\Controller\\EstanciaController::deleteAction',));
            }
            not_estancia_delete:

        }

        // alexyam_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'alexyam_homepage');
            }

            return array (  '_controller' => 'alex\\yamBundle\\Controller\\DefaultController::indexAction',  '_route' => 'alexyam_homepage',);
        }

        if (0 === strpos($pathinfo, '/hotel')) {
            // hotel_index
            if (rtrim($pathinfo, '/') === '/hotel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hotel_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hotel_index');
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\HotelController::indexAction',  '_route' => 'hotel_index',);
            }
            not_hotel_index:

            // hotel_show
            if (preg_match('#^/hotel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_hotel_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_show')), array (  '_controller' => 'alex\\yamBundle\\Controller\\HotelController::showAction',));
            }
            not_hotel_show:

            // hotel_new
            if ($pathinfo === '/hotel/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hotel_new;
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\HotelController::newAction',  '_route' => 'hotel_new',);
            }
            not_hotel_new:

            // hotel_edit
            if (preg_match('#^/hotel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_hotel_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_edit')), array (  '_controller' => 'alex\\yamBundle\\Controller\\HotelController::editAction',));
            }
            not_hotel_edit:

            // hotel_delete
            if (preg_match('#^/hotel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_hotel_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hotel_delete')), array (  '_controller' => 'alex\\yamBundle\\Controller\\HotelController::deleteAction',));
            }
            not_hotel_delete:

        }

        if (0 === strpos($pathinfo, '/paquete')) {
            // paquete_index
            if (rtrim($pathinfo, '/') === '/paquete') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paquete_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'paquete_index');
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteController::indexAction',  '_route' => 'paquete_index',);
            }
            not_paquete_index:

            // paquete_show
            if (preg_match('#^/paquete/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_paquete_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paquete_show')), array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteController::showAction',));
            }
            not_paquete_show:

            // paquete_new
            if ($pathinfo === '/paquete/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_paquete_new;
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteController::newAction',  '_route' => 'paquete_new',);
            }
            not_paquete_new:

            // paquete_edit
            if (preg_match('#^/paquete/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_paquete_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paquete_edit')), array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteController::editAction',));
            }
            not_paquete_edit:

            // paquete_delete
            if (preg_match('#^/paquete/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_paquete_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'paquete_delete')), array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteController::deleteAction',));
            }
            not_paquete_delete:

            if (0 === strpos($pathinfo, '/paqueteporcliente')) {
                // paqueteporcliente_index
                if (rtrim($pathinfo, '/') === '/paqueteporcliente') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paqueteporcliente_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paqueteporcliente_index');
                    }

                    return array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteporclienteController::indexAction',  '_route' => 'paqueteporcliente_index',);
                }
                not_paqueteporcliente_index:

                // paqueteporcliente_show
                if (preg_match('#^/paqueteporcliente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paqueteporcliente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paqueteporcliente_show')), array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteporclienteController::showAction',));
                }
                not_paqueteporcliente_show:

                // paqueteporcliente_new
                if ($pathinfo === '/paqueteporcliente/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_paqueteporcliente_new;
                    }

                    return array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteporclienteController::newAction',  '_route' => 'paqueteporcliente_new',);
                }
                not_paqueteporcliente_new:

                // paqueteporcliente_edit
                if (preg_match('#^/paqueteporcliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_paqueteporcliente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paqueteporcliente_edit')), array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteporclienteController::editAction',));
                }
                not_paqueteporcliente_edit:

                // paqueteporcliente_delete
                if (preg_match('#^/paqueteporcliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_paqueteporcliente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paqueteporcliente_delete')), array (  '_controller' => 'alex\\yamBundle\\Controller\\PaqueteporclienteController::deleteAction',));
                }
                not_paqueteporcliente_delete:

            }

        }

        if (0 === strpos($pathinfo, '/ruta')) {
            // ruta_index
            if (rtrim($pathinfo, '/') === '/ruta') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ruta_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ruta_index');
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\RutaController::indexAction',  '_route' => 'ruta_index',);
            }
            not_ruta_index:

            // ruta_show
            if (preg_match('#^/ruta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ruta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_show')), array (  '_controller' => 'alex\\yamBundle\\Controller\\RutaController::showAction',));
            }
            not_ruta_show:

            // ruta_new
            if ($pathinfo === '/ruta/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ruta_new;
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\RutaController::newAction',  '_route' => 'ruta_new',);
            }
            not_ruta_new:

            // ruta_edit
            if (preg_match('#^/ruta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ruta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_edit')), array (  '_controller' => 'alex\\yamBundle\\Controller\\RutaController::editAction',));
            }
            not_ruta_edit:

            // ruta_delete
            if (preg_match('#^/ruta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ruta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ruta_delete')), array (  '_controller' => 'alex\\yamBundle\\Controller\\RutaController::deleteAction',));
            }
            not_ruta_delete:

        }

        if (0 === strpos($pathinfo, '/incluye')) {
            // incluye_index
            if (rtrim($pathinfo, '/') === '/incluye') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_incluye_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'incluye_index');
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\IncluyeController::indexAction',  '_route' => 'incluye_index',);
            }
            not_incluye_index:

            // incluye_show
            if (preg_match('#^/incluye/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_incluye_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'incluye_show')), array (  '_controller' => 'alex\\yamBundle\\Controller\\IncluyeController::showAction',));
            }
            not_incluye_show:

            // incluye_new
            if ($pathinfo === '/incluye/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_incluye_new;
                }

                return array (  '_controller' => 'alex\\yamBundle\\Controller\\IncluyeController::newAction',  '_route' => 'incluye_new',);
            }
            not_incluye_new:

            // incluye_edit
            if (preg_match('#^/incluye/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_incluye_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'incluye_edit')), array (  '_controller' => 'alex\\yamBundle\\Controller\\IncluyeController::editAction',));
            }
            not_incluye_edit:

            // incluye_delete
            if (preg_match('#^/incluye/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_incluye_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'incluye_delete')), array (  '_controller' => 'alex\\yamBundle\\Controller\\IncluyeController::deleteAction',));
            }
            not_incluye_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
