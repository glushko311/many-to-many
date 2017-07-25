<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // track_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'track_default_index');
            }

            return array (  '_controller' => 'TrackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'track_default_index',);
        }

        if (0 === strpos($pathinfo, '/track')) {
            // track_track_showtrack
            if (preg_match('#^/track/(?P<track_id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_track_track_showtrack;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'track_track_showtrack')), array (  '_controller' => 'TrackBundle\\Controller\\TrackController::showTrackAction',));
            }
            not_track_track_showtrack:

            // track_track_addmemberstotrack
            if (preg_match('#^/track/(?P<track_id>\\d+)/add_members$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_track_track_addmemberstotrack;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'track_track_addmemberstotrack')), array (  '_controller' => 'TrackBundle\\Controller\\TrackController::addMembersToTrackAction',));
            }
            not_track_track_addmemberstotrack:

            // track_track_addmembersajax
            if (preg_match('#^/track/(?P<track_id>\\d+)/add_members$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_track_track_addmembersajax;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'track_track_addmembersajax')), array (  '_controller' => 'TrackBundle\\Controller\\TrackController::addMembersAjaxAction',));
            }
            not_track_track_addmembersajax:

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
