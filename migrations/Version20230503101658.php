<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503101658 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hobby (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_hobby (user_id INT NOT NULL, hobby_id INT NOT NULL, INDEX IDX_DBA6086FA76ED395 (user_id), INDEX IDX_DBA6086F322B2123 (hobby_id), PRIMARY KEY(user_id, hobby_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_hobby ADD CONSTRAINT FK_DBA6086FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_hobby ADD CONSTRAINT FK_DBA6086F322B2123 FOREIGN KEY (hobby_id) REFERENCES hobby (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_hobby DROP FOREIGN KEY FK_DBA6086FA76ED395');
        $this->addSql('ALTER TABLE user_hobby DROP FOREIGN KEY FK_DBA6086F322B2123');
        $this->addSql('DROP TABLE hobby');
        $this->addSql('DROP TABLE user_hobby');
    }
}
