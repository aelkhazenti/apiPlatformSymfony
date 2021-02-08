<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210207181640 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_participation (id INT AUTO_INCREMENT NOT NULL, iduser_id INT NOT NULL, ident_id INT NOT NULL, UNIQUE INDEX UNIQ_45DB4F1F786A81FB (iduser_id), UNIQUE INDEX UNIQ_45DB4F1FD6197023 (ident_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_participation ADD CONSTRAINT FK_45DB4F1F786A81FB FOREIGN KEY (iduser_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE user_participation ADD CONSTRAINT FK_45DB4F1FD6197023 FOREIGN KEY (ident_id) REFERENCES entrainement (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user_participation');
    }
}
