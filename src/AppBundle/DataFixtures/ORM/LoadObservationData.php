<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Observation;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadObservationData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $observation = new Observation();
        $observation->setDateObservation(new \DateTime());
        $observation->setTitle("Observation d'un Chevalier stagnatile");
        $observation->setGpsLatitude(48.242931);
        $observation->setGpsLongitude(-4.425243);
        $observation->setDescription("Description");
        $observation->setStatus("waiting");

        $espece = $manager->getRepository('AppBundle:Taxrefv10')->find(1209);
        $author = $manager->getRepository('UserBundle:User')->find(4);

        $espece->addObservation($observation);
        $author->addObservation($observation);
        $observation->setEspece($espece);
        $observation->setAuthor($author);

        $manager->persist($espece);
        $manager->persist($author);
        $manager->persist($observation);
        $manager->flush();


        $observation = new Observation();
        $observation->setDateObservation(new \DateTime());
        $observation->setTitle("Observation d'un Pipit de Richard");
        $observation->setGpsLatitude(48.041610);
        $observation->setGpsLongitude(-4.867217);
        $observation->setDescription("Description");
        $observation->setStatus("waiting");

        $espece = $manager->getRepository('AppBundle:Taxrefv10')->find(2699);
        $author = $manager->getRepository('UserBundle:User')->find(4);

        $espece->addObservation($observation);
        $author->addObservation($observation);
        $observation->setEspece($espece);
        $observation->setAuthor($author);

        $manager->persist($espece);
        $manager->persist($author);
        $manager->persist($observation);
        $manager->flush();


        $observation = new Observation();
        $observation->setDateObservation(new \DateTime());
        $observation->setTitle("Observation d'un Pipit de Richard");
        $observation->setGpsLatitude(48.035984);
        $observation->setGpsLongitude(-4.852684);
        $observation->setDescription("Description");
        $observation->setStatus("waiting");

        $espece = $manager->getRepository('AppBundle:Taxrefv10')->find(2699);
        $author = $manager->getRepository('UserBundle:User')->find(4);

        $espece->addObservation($observation);
        $author->addObservation($observation);
        $observation->setEspece($espece);
        $observation->setAuthor($author);

        $manager->persist($espece);
        $manager->persist($author);
        $manager->persist($observation);
        $manager->flush();


        $observation = new Observation();
        $observation->setDateObservation(new \DateTime());
        $observation->setTitle("Observation d'un Goéland à ailes blanches");
        $observation->setGpsLatitude(48.460323);
        $observation->setGpsLongitude(-5.103005);
        $observation->setDescription("Description");
        $observation->setStatus("waiting");

        $espece = $manager->getRepository('AppBundle:Taxrefv10')->find(906);
        $author = $manager->getRepository('UserBundle:User')->find(4);

        $espece->addObservation($observation);
        $author->addObservation($observation);
        $observation->setEspece($espece);
        $observation->setAuthor($author);

        $manager->persist($espece);
        $manager->persist($author);
        $manager->persist($observation);
        $manager->flush();


        $observation = new Observation();
        $observation->setDateObservation(new \DateTime());
        $observation->setTitle("Observation d'un Rougequeue noir");
        $observation->setGpsLatitude(48.067142);
        $observation->setGpsLongitude(-4.426957);
        $observation->setDescription("Description");
        $observation->setStatus("waiting");

        $espece = $manager->getRepository('AppBundle:Taxrefv10')->find(3095);
        $author = $manager->getRepository('UserBundle:User')->find(4);

        $espece->addObservation($observation);
        $author->addObservation($observation);
        $observation->setEspece($espece);
        $observation->setAuthor($author);

        $manager->persist($espece);
        $manager->persist($author);
        $manager->persist($observation);
        $manager->flush();
    }


    /**
     * Get the order of this fixture
     * @return integer
     */
    public function getOrder()
    {
        return 25;
    }

}