<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505114103 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E663DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_23A0E663DA5256D ON article (image_id)');
        $this->addSql('ALTER TABLE image ADD alt VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE video ADD poster VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E663DA5256D');
        $this->addSql('DROP INDEX IDX_23A0E663DA5256D ON article');
        $this->addSql('ALTER TABLE article DROP image_id');
        $this->addSql('ALTER TABLE image DROP alt');
        $this->addSql('ALTER TABLE video DROP poster');
    }
}
