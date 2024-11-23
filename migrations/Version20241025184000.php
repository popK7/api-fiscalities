<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241025184000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE indemnity (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, min_year INT DEFAULT NULL, max_year INT DEFAULT NULL, hours_must_paid DOUBLE PRECISION DEFAULT NULL, INDEX IDX_6BBFD1CEF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE indemnity ADD CONSTRAINT FK_6BBFD1CEF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE indemnity DROP FOREIGN KEY FK_6BBFD1CEF92F3E70');
        $this->addSql('DROP TABLE indemnity');
    }
}
