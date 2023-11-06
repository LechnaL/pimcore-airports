# Pimcore Airport Data Assignment

## Project setup with docker

1. You need to have docker installed, preferably the latest version: https://docs.docker.com/engine/install/.

2. Open new terminal in the project folder.

3. Initialize the docker images using ``docker compose up -d`` command so docker will setup all required containers to run the app.

4. Install pimcore and initialize the DB `docker compose exec php vendor/bin/pimcore-install` .

5. To install all needed packages to the vendor directory use ``composer install``.

6. Open pimcore admin panel in Your browser <http://localhost:8080/admin> and log in using credentials ``admin:admin``.

## Start import

* It is reccomended to first import the `airports` so model relations can be properly established.

1. To start importing the data you need to manualy start the data import from datahub menu, choose desired import then go into `execution` label and click `start`.

2. If everything was properly set, the desired data should be importing into the specified directory.
