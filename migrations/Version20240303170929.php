<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240303170929 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualites (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, date DATE NOT NULL, priorite VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, discription VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centre_de_don (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, adresse VARCHAR(50) NOT NULL, coordonnegeo VARCHAR(50) NOT NULL, contact VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centre_de_don_stock (centre_de_don_id INT NOT NULL, stock_id INT NOT NULL, INDEX IDX_41E2BAE6978A6BCC (centre_de_don_id), INDEX IDX_41E2BAE6DCD6110 (stock_id), PRIMARY KEY(centre_de_don_id, stock_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaires (id INT AUTO_INCREMENT NOT NULL, theme VARCHAR(255) NOT NULL, discription VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE company (id_c INT AUTO_INCREMENT NOT NULL, nom_c VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, num_tel INT NOT NULL, mail VARCHAR(255) NOT NULL, site_web VARCHAR(255) NOT NULL, pays_c VARCHAR(255) NOT NULL, description_c VARCHAR(255) NOT NULL, PRIMARY KEY(id_c)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demandededon (id_demande INT AUTO_INCREMENT NOT NULL, id_donateur INT NOT NULL, datedemande DATETIME NOT NULL, typededon VARCHAR(255) NOT NULL, quantitedemande INT NOT NULL, statusdemande VARCHAR(255) NOT NULL, PRIMARY KEY(id_demande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE front (id INT AUTO_INCREMENT NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livreur (id INT AUTO_INCREMENT NOT NULL, cin INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, statut_l VARCHAR(255) NOT NULL, zone_liv VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE log_modification (id INT AUTO_INCREMENT NOT NULL, centre_id INT NOT NULL, action VARCHAR(50) NOT NULL, date DATETIME NOT NULL, INDEX IDX_3735B774463CD7C3 (centre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, livreur_id INT DEFAULT NULL, type_m VARCHAR(60) NOT NULL, description_m VARCHAR(255) NOT NULL, quantite_m INT NOT NULL, dateexp_m DATE NOT NULL, statut_m VARCHAR(255) NOT NULL, INDEX IDX_18D2B091F8646701 (livreur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id_reservation INT AUTO_INCREMENT NOT NULL, id_demande INT NOT NULL, datereservation DATE NOT NULL, heurereservation TIME NOT NULL, quantitereserve VARCHAR(255) NOT NULL, statusreservation VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, cas VARCHAR(10) NOT NULL, PRIMARY KEY(id_reservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stock (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) NOT NULL, quantite INT NOT NULL, etat VARCHAR(50) NOT NULL, origine VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE volunteer (id_v INT AUTO_INCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, volunteer_address VARCHAR(255) NOT NULL, phone_number VARCHAR(255) NOT NULL, email_address VARCHAR(255) NOT NULL, date_of_birth DATE NOT NULL, occupation VARCHAR(255) NOT NULL, skills VARCHAR(255) NOT NULL, availability TINYINT(1) NOT NULL, PRIMARY KEY(id_v)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE centre_de_don_stock ADD CONSTRAINT FK_41E2BAE6978A6BCC FOREIGN KEY (centre_de_don_id) REFERENCES centre_de_don (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE centre_de_don_stock ADD CONSTRAINT FK_41E2BAE6DCD6110 FOREIGN KEY (stock_id) REFERENCES stock (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE log_modification ADD CONSTRAINT FK_3735B774463CD7C3 FOREIGN KEY (centre_id) REFERENCES centre_de_don (id)');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091F8646701 FOREIGN KEY (livreur_id) REFERENCES livreur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE centre_de_don_stock DROP FOREIGN KEY FK_41E2BAE6978A6BCC');
        $this->addSql('ALTER TABLE centre_de_don_stock DROP FOREIGN KEY FK_41E2BAE6DCD6110');
        $this->addSql('ALTER TABLE log_modification DROP FOREIGN KEY FK_3735B774463CD7C3');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091F8646701');
        $this->addSql('DROP TABLE actualites');
        $this->addSql('DROP TABLE centre_de_don');
        $this->addSql('DROP TABLE centre_de_don_stock');
        $this->addSql('DROP TABLE commentaires');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE demandededon');
        $this->addSql('DROP TABLE front');
        $this->addSql('DROP TABLE livreur');
        $this->addSql('DROP TABLE log_modification');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE stock');
        $this->addSql('DROP TABLE volunteer');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
