<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229184407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demandededon DROP id_demande, DROP id_donateur, DROP datedemande, DROP typededon, DROP quantitedemande, DROP statusdemande, CHANGE id id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE id id VARCHAR(255) NOT NULL, CHANGE id_reservation id_reservation VARCHAR(255) NOT NULL, CHANGE id_demande id_demande VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demandededon ADD id_demande INT NOT NULL, ADD id_donateur INT NOT NULL, ADD datedemande DATE NOT NULL, ADD typededon VARCHAR(255) NOT NULL, ADD quantitedemande VARCHAR(255) NOT NULL, ADD statusdemande VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE id_reservation id_reservation INT NOT NULL, CHANGE id_demande id_demande INT NOT NULL');
    }
}
