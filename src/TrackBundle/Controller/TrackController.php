<?php
/**
 * Created by JetBrains PhpStorm.
 * User: php
 * Date: 7/14/17
 * Time: 12:46 PM
 * To change this template use File | Settings | File Templates.
 */

namespace TrackBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use TrackBundle\Entity\Track;

class TrackController  extends Controller{

    /**
     * @Route(
     *"/track/{track_id}",
     * requirements={
     *  "track_id":"\d+"
     * }
     * )
     * @Method({"GET", "POST"})
     */
    public function showTrackAction($track_id){
        $em = $this->getDoctrine();
        $trackRepo = $em->getRepository("TrackBundle:Track");
        $track = $trackRepo->find($track_id);

        return $this->render("TrackBundle:Track:show_track.html.twig", ['track'=>$track]);
    }

    /**
     * @ROUTE(
     * "/track/{track_id}/add_members",
     * requirements={
     *  "track_id":"\d+"
     * }
     * )
     * @Method({"GET", "POST"})
     */
    public function addMembersToTrackAction($track_id, Request $request){
        $em = $this->getDoctrine();
        $trackRepo = $em->getRepository("TrackBundle:Track");
        $track = $trackRepo->find($track_id);
        $membersInTrack = $track->getMembers()->getValues();

        $membersRepo = $em->getRepository("TrackBundle:Member");
        $members = $membersRepo->findAll();
        $membersDif=[];
        foreach($members as $member){
            $isInTrack = false;
            foreach($membersInTrack as $trackMember){
                if($member==$trackMember){
                    $isInTrack = true;
                    break;
                }
            }
            if(!$isInTrack){
                $membersDif[] = $member;
            }

        }
        $addMembers =$request->request->get('add_members');
        if(!empty($addMembers)){
            var_dump($addMembers);
            echo '<br>';
            var_dump($_GET['add_members']);
            die;

        }

        return $this->render("TrackBundle:Track:members_to_track.html.twig",[
            'track'=>$track,
            'membersDiff'=> $membersDif,
            'membersInTrack'=> $membersInTrack,
        ]);
    }
}