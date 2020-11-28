<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201128150849 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add pseudo field';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD pseudo VARCHAR(20) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E986CC499D ON users (pseudo)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_1483A5E986CC499D ON users');
        $this->addSql('ALTER TABLE users DROP pseudo');
    }
}
