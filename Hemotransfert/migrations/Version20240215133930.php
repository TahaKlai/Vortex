<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215133930 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE centre_de_don (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, adresse VARCHAR(50) NOT NULL, coordonnegeo VARCHAR(50) NOT NULL, contact VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centre_de_don_stock (centre_de_don_id INT NOT NULL, stock_id INT NOT NULL, INDEX IDX_41E2BAE6978A6BCC (centre_de_don_id), INDEX IDX_41E2BAE6DCD6110 (stock_id), PRIMARY KEY(centre_de_don_id, stock_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, quantite INT NOT NULL, etat VARCHAR(50) NOT NULL, origine VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE centre_de_don_stock ADD CONSTRAINT FK_41E2BAE6978A6BCC FOREIGN KEY (centre_de_don_id) REFERENCES centre_de_don (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE centre_de_don_stock ADD CONSTRAINT FK_41E2BAE6DCD6110 FOREIGN KEY (stock_id) REFERENCES stock (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE centre_de_don_stock DROP FOREIGN KEY FK_41E2BAE6978A6BCC');
        $this->addSql('ALTER TABLE centre_de_don_stock DROP FOREIGN KEY FK_41E2BAE6DCD6110');
        $this->addSql('DROP TABLE centre_de_don');
        $this->addSql('DROP TABLE centre_de_don_stock');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
