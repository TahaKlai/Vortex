<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229210641 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE log_modification (id INT AUTO_INCREMENT NOT NULL, centre_id INT NOT NULL, action VARCHAR(50) NOT NULL, date DATETIME NOT NULL, INDEX IDX_3735B774463CD7C3 (centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE log_modification ADD CONSTRAINT FK_3735B774463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre_de_don (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE log_modification DROP FOREIGN KEY FK_3735B774463CD7C3');
        $this->addSql('DROP TABLE log_modification');
    }
}