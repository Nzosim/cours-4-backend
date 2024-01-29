<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Batiment;
use App\Entity\Personnes;
use Faker\Factory;


class AddData extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 1; $i < 4; $i++) {
            $batiment = new Batiment();
            $batiment->setNom($faker->cityPrefix() . ' ' . $faker->citySuffix());
            $batiment->setAdresse($faker->address());
            $manager->persist($batiment);
        }

        for ($i = 1; $i < 2; $i++) {
            $personne = new Personnes();
            $personne->setNom($faker->lastName());
            $personne->setPrenom($faker->firstName());
            $manager->persist($personne);
        }

        $manager->flush();
    }
}
