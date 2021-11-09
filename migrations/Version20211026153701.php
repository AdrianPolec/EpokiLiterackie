<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211026153701 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE epoki (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, ramy_czasowe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE postacie (id INT AUTO_INCREMENT NOT NULL, epoka_id INT NOT NULL, name VARCHAR(255) NOT NULL, dziela VARCHAR(999) NOT NULL, INDEX IDX_7584EBB31C9BD60A (epoka_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE postacie ADD CONSTRAINT FK_7584EBB31C9BD60A FOREIGN KEY (epoka_id) REFERENCES epoki (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE postacie DROP FOREIGN KEY FK_7584EBB31C9BD60A');
        $this->addSql('DROP TABLE epoki');
        $this->addSql('DROP TABLE postacie');
    }
}
