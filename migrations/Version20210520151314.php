<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520151314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE immodev (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, area INT NOT NULL, rooms_number INT NOT NULL, housing_type VARCHAR(255) NOT NULL, adress VARCHAR(100) DEFAULT NULL, post_code INT DEFAULT NULL, city VARCHAR(50) NOT NULL, is_pool TINYINT(1) NOT NULL, is_exterior TINYINT(1) NOT NULL, exterior_surface INT DEFAULT NULL, is_garage TINYINT(1) NOT NULL, transaction VARCHAR(20) NOT NULL, price DOUBLE PRECISION NOT NULL, publication_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE immodev');
    }
}
