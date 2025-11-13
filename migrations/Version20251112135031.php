<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251112135031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE velo (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(50) NOT NULL, taille VARCHAR(10) NOT NULL, genre VARCHAR(20) NOT NULL, marque VARCHAR(100) NOT NULL, modele VARCHAR(100) NOT NULL, prix NUMERIC(10, 2) NOT NULL, stock INT NOT NULL, couleur VARCHAR(50) DEFAULT NULL, description LONGTEXT NOT NULL, yes VARCHAR(255) NOT NULL, image_url VARCHAR(255) DEFAULT NULL, est_en_promotion TINYINT(1) NOT NULL, prix_promotion NUMERIC(10, 2) DEFAULT NULL, date_ajout DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE velo');
    }
}
