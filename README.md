## Description

Cette application reproduit un système de réservation d'appartement en ligne tel que AirBnb.

## Démo

Vous pouvez voir un aperçu de l'application à l'adresse suivante : https://symbnb.bastien-loughin.fr

## Installation

```
git clone https://github.com/bastien70/symbnb.git

composer install
npm install

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```
