<?php
/**
 * Created by JetBrains PhpStorm.
 * User: php
 * Date: 7/13/17
 * Time: 5:16 PM
 * To change this template use File | Settings | File Templates.
 */

namespace TrackBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use TrackBundle\Entity\Member;

/**
 * Class Track
 * @package TrackBundle\Entity
 * @ORM\Table(name="track")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="TrackBundle\Repositories\TrackRepository")
 */
class Track {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $track;

    /**
     * Many Tracks have Many Members.
     * @ORM\ManyToMany(targetEntity="Member", inversedBy="tracks")
     * @ORM\JoinTable(name="track_member")
     */
    private $members;

    public function __construct(){
        $this->members = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set track
     *
     * @param string $track
     *
     * @return Track
     */
    public function setTrack($track)
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Get track
     *
     * @return string
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Add member
     *
     * @param \TrackBundle\Entity\Member $member
     *
     * @return Track
     */
    public function addMember(\TrackBundle\Entity\Member $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \TrackBundle\Entity\Member $member
     */
    public function removeMember(\TrackBundle\Entity\Member $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }
}
