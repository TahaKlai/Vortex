<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229190008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demandededon ADD id_demande INT AUTO_INCREMENT NOT NULL, ADD id_donateur INT NOT NULL, ADD datedemande DATETIME NOT NULL, ADD quantitedemande INT NOT NULL, ADD statusdemande VARCHAR(255) NOT NULL, CHANGE id typededon VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id_demande)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demandededon MODIFY id_demande INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON demandededon');
        $this->addSql('ALTER TABLE demandededon ADD id VARCHAR(255) NOT NULL, DROP id_demande, DROP id_donateur, DROP datedemande, DROP typededon, DROP quantitedemande, DROP statusdemande');
        $this->addSql('ALTER TABLE demandededon ADD PRIMARY KEY (id)');
    }
}
