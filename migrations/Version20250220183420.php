<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220183420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE preferences (id INT AUTO_INCREMENT NOT NULL, pays_pref VARCHAR(255) NOT NULL, domaine VARCHAR(255) NOT NULL, langue_pref VARCHAR(255) NOT NULL, mode_enseignement VARCHAR(255) NOT NULL, type_universite VARCHAR(255) NOT NULL, activites_cult VARCHAR(255) NOT NULL, climat_pref VARCHAR(255) NOT NULL, niv_langue VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE preferences');
    }
}
