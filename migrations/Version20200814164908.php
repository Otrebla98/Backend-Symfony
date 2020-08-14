<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200814164908 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ejemplo (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, telefono INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parametros_configurables (id INT AUTO_INCREMENT NOT NULL, parametro VARCHAR(255) NOT NULL, valor VARCHAR(100) NOT NULL, activo TINYINT(1) NOT NULL, tipo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE producto CHANGE descripcion descripcion LONGTEXT DEFAULT NULL, CHANGE precio precio NUMERIC(10, 2) DEFAULT NULL, CHANGE talla talla VARCHAR(100) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE ejemplo');
        $this->addSql('DROP TABLE parametros_configurables');
        $this->addSql('ALTER TABLE producto CHANGE descripcion descripcion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE precio precio VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE talla talla VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
