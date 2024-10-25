# Projet Pokémon Symfony

Ce projet est une application Symfony pour gérer les Pokémon.

## Prérequis

- Docker
- Docker Compose

## Installation

1. Clonez le dépôt :

    ```sh
    git clone https://github.com/Fiujy/Pokemon.git
    cd Pokemon
    ```

2. Copiez le fichier `.env.example` et modifiez-le si nécessaire :

    ```sh
    cp .env.example .env
    ```

3. Construisez et démarrez les conteneurs Docker :

    ```sh
    docker compose up --build -d
    ```

4. Installez les dépendances avec Composer :

    ```sh
    docker compose exec php composer install
    ```

5. Générez les migrations de la base de données : 
    ```sh
    docker compose exec php bin/console make:migration
    ```

5. Appliquez les migrations de la base de données :

    ```sh
    docker compose exec php bin/console doctrine:migrations:migrate
    ```

6. Chargez la base de données à partir de `dump.sql`, avec la configuration de base du projet :

    ```sh
    docker exec -i pokemon-db-1 psql -U symfony -d pokemon_db < dump.sql
    ```

7. Sinon :

    ```sh
    docker exec -i <nom_du_conteneur_postgres> psql -U <username> -d pokemon_db < dump.sql
    ```

## Mise à jour

Pour mettre à jour les dépendances avec Composer :

```sh
docker compose exec php composer update