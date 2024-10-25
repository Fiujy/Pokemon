-- Créer la base de données si elle n'existe pas déjà
CREATE DATABASE pokemon_db;

-- Utiliser la base de données
\c pokemon_db

-- Supprimer la table pokemon si elle existe
DROP TABLE IF EXISTS pokemon;

-- Créer la table pokemon
CREATE TABLE pokemon (
  id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  type VARCHAR(255) NOT NULL
);

-- Insérer les Pokémon
INSERT INTO pokemon (name, type) VALUES ('Bulbizarre', 'Plante/Poison');
INSERT INTO pokemon (name, type) VALUES ('Herbizarre', 'Plante/Poison');
INSERT INTO pokemon (name, type) VALUES ('Florizarre', 'Plante/Poison');
INSERT INTO pokemon (name, type) VALUES ('Salamèche', 'Feu');
INSERT INTO pokemon (name, type) VALUES ('Reptincel', 'Feu');
INSERT INTO pokemon (name, type) VALUES ('Dracaufeu', 'Feu/Vol');
INSERT INTO pokemon (name, type) VALUES ('Carapuce', 'Eau');
INSERT INTO pokemon (name, type) VALUES ('Carabaffe', 'Eau');
INSERT INTO pokemon (name, type) VALUES ('Tortank', 'Eau');
INSERT INTO pokemon (name, type) VALUES ('Chenipan', 'Insecte');
