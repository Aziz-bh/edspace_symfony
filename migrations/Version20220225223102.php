<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220225223102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_news DROP cat_name');
        $this->addSql('ALTER TABLE publication_news ADD category_name_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication_news ADD CONSTRAINT FK_162B189DB6CFDCA8 FOREIGN KEY (category_name_id) REFERENCES categorie_news (id)');
        $this->addSql('CREATE INDEX IDX_162B189DB6CFDCA8 ON publication_news (category_name_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_club CHANGE categorie_nom categorie_nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie_emploi CHANGE category_name category_name VARCHAR(55) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie_news ADD cat_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE classe CHANGE niveau_id niveau_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE classe classe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE club CHANGE club_nom club_nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE club_description club_description VARCHAR(1000) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE club_pub CHANGE pub_description pub_description VARCHAR(1000) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE document CHANGE matiere_id matiere_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE niveau_id niveau_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date_insert date_insert VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE proprietaire proprietaire VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type type VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE emploi CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE content content VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE matiere CHANGE id id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE niveau_id niveau_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE message CHANGE content content VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE niveau CHANGE id id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE publication_news DROP FOREIGN KEY FK_162B189DB6CFDCA8');
        $this->addSql('DROP INDEX IDX_162B189DB6CFDCA8 ON publication_news');
        $this->addSql('ALTER TABLE publication_news DROP category_name_id, CHANGE content content VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE title title VARCHAR(55) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE owner owner VARCHAR(55) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponse CHANGE reply reply VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE thread CHANGE question question VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE thread_type CHANGE content content VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
