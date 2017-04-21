<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="urlOriginal", type="string", length=255)
     */
    private $urlOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="urlImageCrop", type="string", length=255)
     */
    private $urlImageCrop;

    /**
     * @var string
     *
     * @ORM\Column(name="altImage", type="string", length=255)
     */
    private $altImage;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Observation", inversedBy="images")
     */
    private $observation;


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
     * Set name
     *
     * @param string $name
     *
     * @return Image
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
     * Set urlOriginal
     *
     * @param string $urlOriginal
     *
     * @return Image
     */
    public function setUrlOriginal($urlOriginal)
    {
        $this->urlOriginal = $urlOriginal;

        return $this;
    }

    /**
     * Get urlOriginal
     *
     * @return string
     */
    public function getUrlOriginal()
    {
        return $this->urlOriginal;
    }

    /**
     * Set urlImageCrop
     *
     * @param string $urlImageCrop
     *
     * @return Image
     */
    public function setUrlImageCrop($urlImageCrop)
    {
        $this->urlImageCrop = $urlImageCrop;

        return $this;
    }

    /**
     * Get urlImageCrop
     *
     * @return string
     */
    public function getUrlImageCrop()
    {
        return $this->urlImageCrop;
    }

    /**
     * Set altImage
     *
     * @param string $altImage
     *
     * @return Image
     */
    public function setAltImage($altImage)
    {
        $this->altImage = $altImage;

        return $this;
    }

    /**
     * Get altImage
     *
     * @return string
     */
    public function getAltImage()
    {
        return $this->altImage;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Image
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add observation
     *
     * @param \AppBundle\Entity\Observation $observation
     *
     * @return Image
     */
    public function addObservation(\AppBundle\Entity\Observation $observation)
    {
        $this->observation[] = $observation;

        return $this;
    }

    /**
     * Remove observation
     *
     * @param \AppBundle\Entity\Observation $observation
     */
    public function removeObservation(\AppBundle\Entity\Observation $observation)
    {
        $this->observation->removeElement($observation);
    }
}
