<?php
namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Observation", mappedBy="author")
     */
    protected $observations;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Observation", mappedBy="approuvedBy")
     */
    protected $approuvedBys;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="The name is too short.",
     *     maxMessage="The name is too long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $name;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add observation
     *
     * @param \AppBundle\Entity\Observation $observation
     *
     * @return User
     */
    public function addObservation(\AppBundle\Entity\Observation $observation)
    {
        $this->observations[] = $observation;

        return $this;
    }

    /**
     * Remove observation
     *
     * @param \AppBundle\Entity\Observation $observation
     */
    public function removeObservation(\AppBundle\Entity\Observation $observation)
    {
        $this->observations->removeElement($observation);
    }

    /**
     * Get observations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObservations()
    {
        return $this->observations;
    }

    /**
     * Add approuvedBy
     *
     * @param \AppBundle\Entity\Observation $approuvedBy
     *
     * @return User
     */
    public function addApprouvedBy(\AppBundle\Entity\Observation $approuvedBy)
    {
        $this->approuvedBys[] = $approuvedBy;

        return $this;
    }

    /**
     * Remove approuvedBy
     *
     * @param \AppBundle\Entity\Observation $approuvedBy
     */
    public function removeApprouvedBy(\AppBundle\Entity\Observation $approuvedBy)
    {
        $this->approuvedBys->removeElement($approuvedBy);
    }

    /**
     * Get approuvedBys
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprouvedBys()
    {
        return $this->approuvedBys;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
}
