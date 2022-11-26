<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221126004655 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carte_grise (id INT AUTO_INCREMENT NOT NULL, vehicule_id INT DEFAULT NULL, vin VARCHAR(18) NOT NULL, immatriculation VARCHAR(7) DEFAULT NULL, prospect VARCHAR(12) NOT NULL, kilometrage INT NOT NULL, energie VARCHAR(15) DEFAULT NULL, UNIQUE INDEX UNIQ_DA650FC54A4A3511 (vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, vendeur_vn VARCHAR(20) DEFAULT NULL, vendeur_vo VARCHAR(20) DEFAULT NULL, commentaire VARCHAR(50) DEFAULT NULL, type VARCHAR(2) DEFAULT NULL, numero_dossier VARCHAR(8) DEFAULT NULL, intermediaire_de_vente VARCHAR(255) DEFAULT NULL, date_evenement DATETIME NOT NULL, origine_evenement VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(10) NOT NULL, compte_evenement VARCHAR(10) NOT NULL, compte_dernier_evenement VARCHAR(10) NOT NULL, numero INT NOT NULL, civilite VARCHAR(3) DEFAULT NULL, proprietaire_actuel VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, rue VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, phone_domicile VARCHAR(13) DEFAULT NULL, phone_portable VARCHAR(13) DEFAULT NULL, phone_job VARCHAR(13) DEFAULT NULL, email VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, carte_grise_id INT DEFAULT NULL, date_mise_en_circulation DATETIME DEFAULT NULL, date_achat DATETIME DEFAULT NULL, date_dernier_evenement DATETIME NOT NULL, marque VARCHAR(25) NOT NULL, modele VARCHAR(15) DEFAULT NULL, version VARCHAR(50) DEFAULT NULL, UNIQUE INDEX UNIQ_292FFF1D4B651859 (carte_grise_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carte_grise ADD CONSTRAINT FK_DA650FC54A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D4B651859 FOREIGN KEY (carte_grise_id) REFERENCES carte_grise (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE carte_grise DROP FOREIGN KEY FK_DA650FC54A4A3511');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D4B651859');
        $this->addSql('DROP TABLE carte_grise');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fiche');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE vehicule');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
