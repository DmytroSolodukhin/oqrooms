<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170712001435 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE quest DROP FOREIGN KEY FK_4317F8174E7AF8F');
        $this->addSql('DROP INDEX UNIQ_4317F8174E7AF8F ON quest');
        $this->addSql('ALTER TABLE quest DROP gallery_id, DROP sms');
        $this->addSql('ALTER TABLE time ADD email VARCHAR(255) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE page');
        $this->addSql('ALTER TABLE quest ADD gallery_id INT DEFAULT NULL, ADD sms TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE quest ADD CONSTRAINT FK_4317F8174E7AF8F FOREIGN KEY (gallery_id) REFERENCES gallery (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4317F8174E7AF8F ON quest (gallery_id)');
        $this->addSql('ALTER TABLE time DROP email');
    }
}
