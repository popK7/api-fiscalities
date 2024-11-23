<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241025190726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE holliday_option (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sup_hour (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, hour_min DOUBLE PRECISION DEFAULT NULL, hour_max DOUBLE PRECISION DEFAULT NULL, category INT DEFAULT NULL, rate DOUBLE PRECISION DEFAULT NULL, INDEX IDX_19962D1FF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sup_hour ADD CONSTRAINT FK_19962D1FF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sup_hour DROP FOREIGN KEY FK_19962D1FF92F3E70');
        $this->addSql('DROP TABLE holliday_option');
        $this->addSql('DROP TABLE sup_hour');
    }
}
