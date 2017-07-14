<?php
/**
 * Created by JetBrains PhpStorm.
 * User: php
 * Date: 7/13/17
 * Time: 5:15 PM
 * To change this template use File | Settings | File Templates.
 */

namespace TrackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use TrackBundle\Entity\Track;

/**
 * Class Member
 * @package TrackBundle\Entity
 * @ORM\Table(name="member")
 * @ORM\Entity
 */
class Member {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * Many Members have Many Tracks.
     * @ORM\ManyToMany(targetEntity="Track", mappedBy="members")
     */
    private $tracks;

    public function __construct(){
        $this->tracks = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Member
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add track
     *
     * @param \TrackBundle\Entity\Track $track
     *
     * @return Member
     */
    public function addTrack(\TrackBundle\Entity\Track $track)
    {
        $this->tracks[] = $track;

        return $this;
    }

    /**
     * Remove track
     *
     * @param \TrackBundle\Entity\Track $track
     */
    public function removeTrack(\TrackBundle\Entity\Track $track)
    {
        $this->tracks->removeElement($track);
    }

    /**
     * Get tracks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTracks()
    {
        return $this->tracks;
    }
}
