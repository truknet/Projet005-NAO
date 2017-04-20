<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observation
 *
 * @ORM\Table(name="observation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObservationRepository")
 */
class Observation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRecord", type="datetime")
     */
    private $dateRecord;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateObservation", type="datetime")
     */
    private $dateObservation;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="gpsLatitude", type="decimal", precision=10, scale=10)
     */
    private $gpsLatitude;

    /**
     * @var string
     *
     * @ORM\Column(name="gpsLongitude", type="decimal", precision=10, scale=10)
     */
    private $gpsLongitude;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="observation")
     */
    private $images;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="approuvedBys")
     */
    private $approuvedBy;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Taxrefv10", inversedBy="observations")
     */
    private $espece;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="observations")
     */
    private $author;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateRecord
     *
     * @param \DateTime $dateRecord
     *
     * @return Observation
     */
    public function setDateRecord($dateRecord)
    {
        $this->dateRecord = $dateRecord;

        return $this;
    }

    /**
     * Get dateRecord
     *
     * @return \DateTime
     */
    public function getDateRecord()
    {
        return $this->dateRecord;
    }

    /**
     * Set dateObservation
     *
     * @param \DateTime $dateObservation
     *
     * @return Observation
     */
    public function setDateObservation($dateObservation)
    {
        $this->dateObservation = $dateObservation;

        return $this;
    }

    /**
     * Get dateObservation
     *
     * @return \DateTime
     */
    public function getDateObservation()
    {
        return $this->dateObservation;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Observation
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
     * Set gpsLatitude
     *
     * @param string $gpsLatitude
     *
     * @return Observation
     */
    public function setGpsLatitude($gpsLatitude)
    {
        $this->gpsLatitude = $gpsLatitude;

        return $this;
    }

    /**
     * Get gpsLatitude
     *
     * @return string
     */
    public function getGpsLatitude()
    {
        return $this->gpsLatitude;
    }

    /**
     * Set gpsLongitude
     *
     * @param string $gpsLongitude
     *
     * @return Observation
     */
    public function setGpsLongitude($gpsLongitude)
    {
        $this->gpsLongitude = $gpsLongitude;

        return $this;
    }

    /**
     * Get gpsLongitude
     *
     * @return string
     */
    public function getGpsLongitude()
    {
        return $this->gpsLongitude;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Observation
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Observation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set images
     *
     * @param string $images
     *
     * @return Observation
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set approuvedBy
     *
     * @param string $approuvedBy
     *
     * @return Observation
     */
    public function setApprouvedBy($approuvedBy)
    {
        $this->approuvedBy = $approuvedBy;

        return $this;
    }

    /**
     * Get approuvedBy
     *
     * @return string
     */
    public function getApprouvedBy()
    {
        return $this->approuvedBy;
    }

    /**
     * Set espece
     *
     * @param string $espece
     *
     * @return Observation
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get espece
     *
     * @return string
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Observation
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Observation
     */
    public function addImage(\AppBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \AppBundle\Entity\Image $image
     */
    public function removeImage(\AppBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }
}