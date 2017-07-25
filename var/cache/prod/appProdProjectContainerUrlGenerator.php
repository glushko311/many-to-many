<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'track_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TrackBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'track_track_showtrack' => array (  0 =>   array (    0 => 'track_id',  ),  1 =>   array (    '_controller' => 'TrackBundle\\Controller\\TrackController::showTrackAction',  ),  2 =>   array (    'track_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'track_id',    ),    1 =>     array (      0 => 'text',      1 => '/track',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'track_track_addmemberstotrack' => array (  0 =>   array (    0 => 'track_id',  ),  1 =>   array (    '_controller' => 'TrackBundle\\Controller\\TrackController::addMembersToTrackAction',  ),  2 =>   array (    'track_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add_members',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'track_id',    ),    2 =>     array (      0 => 'text',      1 => '/track',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'track_track_addmembersajax' => array (  0 =>   array (    0 => 'track_id',  ),  1 =>   array (    '_controller' => 'TrackBundle\\Controller\\TrackController::addMembersAjaxAction',  ),  2 =>   array (    'track_id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add_members',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'track_id',    ),    2 =>     array (      0 => 'text',      1 => '/track',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
