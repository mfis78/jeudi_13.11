<?php

namespace App\DataFixtures;

use App\Entity\Velo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $velos = [
            [
                'categorie' => 'VTT',
                'taille' => 'XL',
                'genre' => 'Homme',
                'marque' => 'Trek',
                'modele' => 'X-Caliber 8',
                'prix' => 899.99,
                'stock' => 5,
                'couleur' => 'Noir et rouge',
                'description' => 'Excellent VTT pour débuter en montagne',
                'imageUrl' => 'https://example.com/vtt1.jpg',
                'estEnPromotion' => false,
                'prixPromotion' => null,
                'yes' => true, 
                'poids' => '14.50',  // ← AJOUT ICI// <- ajout pour le champ obligatoire
            ],
            [
                'categorie' => 'Vélo de route',
                'taille' => 'M',
                'genre' => 'Femme',
                'marque' => 'Giant',
                'modele' => 'Contend 3',
                'prix' => 649.99,
                'stock' => 8,
                'couleur' => 'Blanc et bleu',
                'description' => 'Vélo de route léger et performant',
                'imageUrl' => 'https://example.com/route1.jpg',
                'estEnPromotion' => true,
                'prixPromotion' => 549.99,
                'yes' => true, 
                'poids' => '14.50',   // ← AJOUT ICI// <- ajout pour le champ obligatoire
            ],

            [
                'categorie' => 'VTT',
                'taille' => 'XL',
                'genre' => 'Homme',
                'marque' => 'Trek',
                'modele' => 'X-Caliber 8',
                'prix' => '899.99',
                'stock' => 5,
                'couleur' => 'Noir et rouge',
                'description' => 'Excellent VTT pour débuter en montagne',
                'imageUrl' => 'https://example.com/vtt1.jpg',
                'estEnPromotion' => false,
                'prixPromotion' => null,
                'poids' => '14.50'   // ← AJOUT ICI
            ],

        ];

        foreach ($velos as $veloData) {
            $velo = new Velo();

            $velo->setCategorie($veloData['categorie']);
            $velo->setTaille($veloData['taille']);
            $velo->setGenre($veloData['genre']);
            $velo->setMarque($veloData['marque']);
            $velo->setModele($veloData['modele']);
            $velo->setPrix($veloData['prix']);
            $velo->setStock($veloData['stock']);
            $velo->setCouleur($veloData['couleur']);
            $velo->setDescription($veloData['description']);
            $velo->setImageUrl($veloData['imageUrl']);
            $velo->setEstEnPromotion($veloData['estEnPromotion']);
            $velo->setPrixPromotion($veloData['prixPromotion']);
            $velo->setPoids($veloData['poids']);
            $velo->setDateAjout(new \DateTime());


            // <- setter pour le champ obligatoire
            $velo->setYes($veloData['yes']);

            $manager->persist($velo);
        }

        $manager->flush();
    }
}
