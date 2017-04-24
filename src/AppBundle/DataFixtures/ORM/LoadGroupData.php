<?php
namespace AppBundle\DataFixtures\ORM;

use UserBundle\Entity\Group;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadGroupData extends AbstractFixture implements OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {
        $group = new Group('Particulier');
        $group->addRole('ROLE_USER');
        $manager->persist($group);

        $group = new Group('Naturaliste');
        $group->addRole('ROLE_USERNAT');
        $manager->persist($group);

        $group = new Group('Modérateur');
        $group->addRole('ROLE_MODERATEUR');
        $manager->persist($group);

        $group = new Group('Administrateur');
        $group->addRole('ROLE_SUPER_ADMIN');
        $manager->persist($group);

        $manager->flush();
    }


    /**
     * Get the order of this fixture
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }

}