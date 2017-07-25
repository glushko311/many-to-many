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

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
//use Doctrine\ORM\QueryBuilder;



class TrackController  extends Controller{

    /**
     * @Route(
     *"/track/{track_id}",
     * defaults={
     * "track_id" : "1"
     * },
     * requirements={
     *  "track_id":"\d+"
     * }
     * )
     * @Method({"GET", "POST"})
     */
    public function showTrackAction($track_id){


       // use getEntityManager !deprecated
//        $em = $this->getDoctrine();
//        $qb = $em->getEntityManager()->createQueryBuilder()->select('t')->from('TrackBundle:Track', 't')->where('t.id = 1')->getQuery();
//        $track = $qb->getSingleResult();
       // use getEntityManager !deprecated

        //use simple function
//        $em = $this->getDoctrine();
//        $trackRepo = $em->getRepository("TrackBundle:Track");
//        $track = $trackRepo->find($track_id);
//        if(!$track){
//            throw $this->createNotFoundException('Маршрут не существует');
//        }
        //use simple function


        //use getEntityManager and createQuery !deprecated
//        $track = $this->getDoctrine()->getEntityManager()
//            ->createQuery('SELECT p FROM TrackBundle:Track p WHERE p.id ='.$track_id)->execute()[0];
        //use getEntityManager and createQuery !deprecated


        //use getManager and createQuery
//        $track = $this->getDoctrine()->getManager()
//            ->createQuery('SELECT p FROM TrackBundle:Track p WHERE p.id ='.$track_id)->execute()[0];//getResult()[0]
        //use getManager and createQuery

        //use getManager
        $em = $this->getDoctrine()->getManager();
        $qb = $em->getRepository('TrackBundle:Track')->createQueryBuilder('t')->where('t.id ='.$track_id)->getQuery();
        $track = $qb->getSingleResult();
        //use getManager

        //var_dump($track->getId());
        return $this->render("TrackBundle:Track:show_track.html.twig", ['track'=>$track]);
    }

    /**
     * @ROUTE(
     * "/track/{track_id}/add_members",
     * requirements={
     *  "track_id":"\d+"
     * }
     * )
     * @Method({"GET"})
     */
    public function addMembersToTrackAction($track_id){
        $em = $this->getDoctrine();
        $trackRepo = $em->getRepository("TrackBundle:Track");
        $track = $trackRepo->find($track_id);
        $membersInTrack = $track->getMembers()->getValues();

        $membersRepo = $em->getRepository("TrackBundle:Member");
        $members = $membersRepo->findAll();

        $membersDif =  $trackRepo->prepareMembersToLoadInView($members, $membersInTrack);


        return $this->render("TrackBundle:Track:members_to_track.html.twig",[
            'track'=>$track,
            'membersDiff'=> $membersDif,
            'membersInTrack'=> $membersInTrack,
        ]);
    }

    /**
     * @ROUTE(
     * "/track/{track_id}/add_members",
     * requirements={
     *  "track_id":"\d+"
     * }
     * )
     * @Method({"POST"})
     */
   public function addMembersAjaxAction($track_id, Request $request){
       $data = $request->request->get('jsonData');
       $membersIdArr = json_decode($data,true);

       $em = $this->getDoctrine();
       $trackRepo = $em->getRepository('TrackBundle:Track');

       $track = $trackRepo->find($track_id);

       $trackRepo->updateMembersById($track, $em, $membersIdArr);


       return $this->render('TrackBundle:Track:success.html.twig');
   }

}