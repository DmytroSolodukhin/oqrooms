<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Oh\GoogleMapFormTypeBundle\Validator\Constraints as OhAssert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * Class: Quest.php
 *
 * @ORM\Entity()
 * @ORM\Table(name="quest")
 */
class Quest
{
    use ITDTrait, ImageTrait;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("user")
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", nullable=true)
     */
    protected $user;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("visible")
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $visible;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("complexity")
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $complexity;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("types")
     *
     * @ORM\ManyToMany(targetEntity="TypeGame", inversedBy="quests")
     **/
    protected $types;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("inprogress")
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $inprogress;

    /**
     * @JMS\Expose
     * @JMS\SerializedName("visits")
     * @JMS\Type("CoreBundle\Entity\Time")
     *
     * @ORM\OneToMany(targetEntity="Time", mappedBy="quest", cascade={"all"}, orphanRemoval=true)
     */
    protected $time;

    /**
     * @JMS\Expose
     * @JMS\SerializedName("open")
     * @JMS\Type("CoreBundle\Entity\Visit")
     *
     * @ORM\OneToMany(targetEntity="Visit", mappedBy="quest", cascade={"all"}, orphanRemoval=true)
     */
    protected $open;

    /**
     * @Assert\Type("\DateTime")
     * @JMS\Expose
     * @JMS\SerializedName("startTime")
     * @JMS\Type("string")
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $startTime;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("city")
     *
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city", referencedColumnName="id", nullable=true)
     */
    protected $city;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     * @JMS\SerializedName("lat")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lat;

    /**
     * @JMS\Expose
     * @JMS\Type("string")
     * @JMS\SerializedName("lng")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lng;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("maxCount")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="integer")
     */
    protected $maxCount;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("count")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $count;

    /**
     * @JMS\Expose
     * @JMS\Type("integer")
     * @JMS\SerializedName("plusPay")
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $plusPay;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $originalBackground;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $background;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $addres;

    /**
     * Quest constructor.
     */
    public function __construct()
    {
        $this->time       = new ArrayCollection();
        $this->open       = new ArrayCollection();
        $this->types      = new ArrayCollection();
        $this->visible    = true;
        $this->inprogress = true;
    }

    /**
     * @return mixed
     */
    public function getAddres()
    {
        return $this->addres;
    }

    /**
     * @param $addres
     * @return $this
     */
    public function setAddres($addres)
    {
        $this->addres = $addres;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param $image
     * @return $this
     */
    public function setBackground($image)
    {
        $this->background = $image;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * @param $gallery
     * @return $this
     */
    public function setGallery($gallery)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOriginalBackground()
    {
        return $this->originalBackground;
    }

    /**
     * @param $originalImage
     * @return $this
     */
    public function setOriginalBackground($originalImage)
    {
        $this->originalBackground = $originalImage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * @param $maxCount
     * @return $this
     */
    public function setMaxCount($maxCount)
    {
        $this->maxCount = $maxCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlusPay()
    {
        return $this->plusPay;
    }

    /**
     * @param $plusPay
     * @return $this
     */
    public function setPlusPay($plusPay)
    {
        $this->plusPay = $plusPay;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param $lat
     * @return $this
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param $lng
     * @return $this
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * @param $latlng
     * @return $this
     */
    public function setLatLng($latlng)
    {
        $this->setLat($latlng['lat']);
        $this->setLng($latlng['lng']);

        return $this;
    }

    /**
     * @Assert\NotBlank()
     * @OhAssert\LatLng()
     */
    public function getLatLng()
    {
        return array('lat'=>$this->getLat(),'lng'=>$this->getLng());
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * @param $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInprogress()
    {
        return $this->inprogress;
    }

    /**
     * @param $inprogress
     * @return $this
     */
    public function setInprogress($inprogress)
    {
        $this->inprogress = $inprogress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param $open
     * @return $this
     */
    public function setOpen($open)
    {
        $this->open = $open;

        return $this;
    }

    /**
     * @param $open
     * @return $this
     */
    public function addOpen($open)
    {
        $this->open[] = $open;

        return $this;
    }

    /**
     * @param Visit $open
     * @return $this
     */
    public function removeOpen(Visit $open)
    {
        $this->open->removeElement($open);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * @param $complexity
     * @return $this
     */
    public function setComplexity($complexity)
    {
        $this->complexity = $complexity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Set parent.
     *
     * @param Collection $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->types = $types;

        foreach ($this->types as $type) {
            $type->addQuest($this);
        }

        return $this;
    }

    /**
     * Add type
     * @param TypeGame $type
     * @return $this
     */
    public function addType($type)
    {
        if (null === $this->types) {
            $this->types = new ArrayCollection();
        }
        $this->types->add($type);

        return $this;
    }
}