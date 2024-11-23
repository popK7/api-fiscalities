<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241025183442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE absence_option (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, start_after_month INT DEFAULT NULL, limit_per_year DOUBLE PRECISION DEFAULT NULL, total_months INT DEFAULT NULL, options LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_D0830EC3F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE absence_option ADD CONSTRAINT FK_D0830EC3F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE absence_option DROP FOREIGN KEY FK_D0830EC3F92F3E70');
        $this->addSql('DROP TABLE absence_option');
    }
}
