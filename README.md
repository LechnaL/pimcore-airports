# Pimcore Airport Data Assignment

## Project setup with docker

1. You need to have docker installed, preferably the latest version: https://docs.docker.com/engine/install/.

2. Open new terminal in the project folder.

3. Initialize the docker images using ``docker compose up -d`` command so docker will setup all required containers to run the app.

4. Install pimcore and initialize the DB `docker compose exec php vendor/bin/pimcore-install` .

5. To install all needed packages to the vendor directory use ``composer install``.

6. Open pimcore admin panel in Your browser <http://localhost:8080/admin> and log in using credentials ``admin:admin``.

## Import models

1. Go into `Settings` -> `Data Models` -> `bulk import`.

2. Inside main project folder use file `bulk_export.json` to import all required data models.

## Import Assets

1. In project directory find `/import` folder.

2. Drag and drop it into `Assets/Home` directory in your GUI.

## Import configuration

1. Inside datahub use `import` button next to `add configuration` then import all json files from `datahub_presets` folder.
