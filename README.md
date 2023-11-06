# Pimcore Airport Data Assignment

## Project setup with docker

1. You need to have docker installed, preferably the latest version: https://docs.docker.com/engine/install/.

2. Open new terminal in the project folder.

3. Initialize the docker images using ``docker compose up -d`` command so docker will setup all required containers to run the app.

4. To install all needed packages to the vendor directory use ``composer install``.

5. Install pimcore and initialize the DB `docker compose exec php vendor/bin/pimcore-install` .

6. Next install required bundles using: `bin/console pimcore:bundle:install PimcoreDataHubBundle`, `bin/console pimcore:bundle:install PimcoreDataImporterBundle`

7. Open pimcore admin panel in Your browser <http://localhost:8080/admin> and log in using credentials chosen at installation.

## Prepare Assets

1. Find the `import` folder inside project.
2. Drag and drop the folder inside `assets/home` directory of your GUI.

## Start import

* It is reccomended to first import the `airports` so model relations can be properly established.

1. To start importing the data you need to manualy start the data import from datahub menu, choose desired import then go into `execution` label and click `start`.

2. If everything was properly set, the desired data should be importing into the specified directory.

* You can also import the data using command line, for that use inside project folder: 


1. Command used to prepare the file data for import
`docker compose exec php bin/console datahub:data-importer:prepare-import <name of config you want to prepare for import>`.


2. Command used to start the data import
`docker compose exec php bin/console datahub:data-importer:datahub:data-importer:process-queue-sequential`.