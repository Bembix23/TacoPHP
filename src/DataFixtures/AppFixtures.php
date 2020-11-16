<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create('fr_FR');
        for($i=0;$i<10;$i++){
            $table = ['CDD', 'CDI', 'FREE'];
            $table2 = ["temps plein", "temps partiel"];
            $ekip = $faker->randomElement($table);
            $post = new Post();
            $post->setTitle($faker->sentence($nbWords = 2 , $variableNbWords = true))
                ->setContent($faker->sentence($nbWords = 10, $variableNbWords = true))
                ->setAddress($faker->streetAddress())
                ->setPostalCode($faker->postcode)
                ->setVille($faker->city())
                ->setAuthor($faker->name())
                ->setCreatedAt($faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now', $timezone = null))
                ->setMajDate($faker->dateTimeBetween($startDate = '-1 week', $endDate = 'now', $timezone = null))
                ->setContrat($ekip)
                ->setTypeContrat($faker->randomElement($table2))
                ;

            if($ekip=="CDD" or "FREE"){
                $post->setendMission($faker->dateTimeBetween($startDate = 'now', $endDate = '+3 months', $timezone = null));
            }

            $manager->persist($post);
        }
        
        $manager->flush();
    }
}
