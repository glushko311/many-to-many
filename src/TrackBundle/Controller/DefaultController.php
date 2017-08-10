<?php

namespace TrackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $test = $this->get('track.test');
        $test->setMethod('CPGetHotTransfer');
        $res = $test->sendToApi(array('accessKey'=>'F4CB990C-9A3D-5717-6508B3A92AF3AEC1','accountID'=>'1064','PRN'=>'123456'));

        var_dump($res);
        return $this->render('TrackBundle:Default:index.html.twig');
    }
}
