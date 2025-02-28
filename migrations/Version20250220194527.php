<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250220194527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE preferences ADD country VARCHAR(255) NOT NULL, ADD domain VARCHAR(255) NOT NULL, ADD preferred_language VARCHAR(255) NOT NULL, ADD teaching_mode VARCHAR(255) NOT NULL, ADD university_type VARCHAR(255) NOT NULL, ADD cultural_activities VARCHAR(255) NOT NULL, ADD language_level VARCHAR(255) NOT NULL, DROP pays_pref, DROP domaine, DROP langue_pref, DROP mode_enseignement, DROP type_universite, DROP activites_cult, DROP niv_langue');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE preferences ADD pays_pref VARCHAR(255) NOT NULL, ADD domaine VARCHAR(255) NOT NULL, ADD langue_pref VARCHAR(255) NOT NULL, ADD mode_enseignement VARCHAR(255) NOT NULL, ADD type_universite VARCHAR(255) NOT NULL, ADD activites_cult VARCHAR(255) NOT NULL, ADD niv_langue VARCHAR(255) NOT NULL, DROP country, DROP domain, DROP preferred_language, DROP teaching_mode, DROP university_type, DROP cultural_activities, DROP language_level');
    }
}
