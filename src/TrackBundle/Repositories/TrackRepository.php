<?php
/**
 * Created by JetBrains PhpStorm.
 * User: php
 * Date: 7/17/17
 * Time: 2:51 PM
 * To change this template use File | Settings | File Templates.
 */

namespace TrackBundle\Repositories;
use Doctrine\ORM\EntityRepository;

class TrackRepository extends EntityRepository{
    public function testMethod(){
        echo '<h1>7777</h1>';
    }

    public function updateMembersById( $track, $em, $membersIdArr ){
        $memsInTrack = $track->getMembers();

        foreach($memsInTrack as $memInTrack){
            $track->removeMember($memInTrack);
        }

        $members = [];
        foreach($membersIdArr as $member_id){
            $memberRepo = $em->getRepository('TrackBundle:Member');
            $member = $memberRepo->find($member_id);
            $track->addMember($member);

        };
        $em = $em->getManager();
        $em->persist($track);
        $em->flush();

        return 1;
    }
}