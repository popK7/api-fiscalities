<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241025184812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE minimum_salary_option (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, hours_per_year DOUBLE PRECISION DEFAULT NULL, hours_per_month DOUBLE PRECISION DEFAULT NULL, hours_per_week DOUBLE PRECISION NOT NULL, hours_per_day DOUBLE PRECISION DEFAULT NULL, start_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_3507B2A1F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE minimum_salary_option ADD CONSTRAINT FK_3507B2A1F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE minimum_salary_option DROP FOREIGN KEY FK_3507B2A1F92F3E70');
        $this->addSql('DROP TABLE minimum_salary_option');
    }
}
