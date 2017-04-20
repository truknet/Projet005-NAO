<?php
namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
}
