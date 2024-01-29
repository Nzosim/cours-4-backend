<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Batiment;
use App\Entity\Personnes;


class AddData extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $batimentA = new Batiment();
        $batimentA->setNom('Batiment A');
        $batimentA->setAdresse('1 rue de la Paix');
        $manager->persist($batimentA);

        $personneJ = new Personnes();
        $personneJ->setNom('Julius');
        $personneJ->setPrenom('El Escargot');
        // $personneJ->setBatiment($batimentA);
        $manager->persist($personneJ);

        $personneR = new Personnes();
        $personneR->setNom('Rulius');
        $personneR->setPrenom('El Escargot');
        // $personneR->setBatiment($batimentA);
        $manager->persist($personneR);

        $manager->flush();
    }
}
