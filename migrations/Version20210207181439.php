<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210207181439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entrainement (id INT AUTO_INCREMENT NOT NULL, iduser_id INT DEFAULT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, heur_deb TIME NOT NULL, heur_fin TIME NOT NULL, type_ent VARCHAR(255) NOT NULL, INDEX IDX_A27444E5786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) DEFAULT NULL, hauteur DOUBLE PRECISION DEFAULT NULL, poids DOUBLE PRECISION DEFAULT NULL, age INT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entrainement ADD CONSTRAINT FK_A27444E5786A81FB FOREIGN KEY (iduser_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainement DROP FOREIGN KEY FK_A27444E5786A81FB');
        $this->addSql('DROP TABLE entrainement');
        $this->addSql('DROP TABLE `user`');
    }
}
