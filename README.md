<p align="center"><a href="https://bluepundit.eu" target="_blank"><img src="https://bluepundit.eu/img/bluepundit-logo-pundit.png?1" width="100"></a></p>

# Arithmos Academy

During my time as a mathematics tutor, I conceived the idea for Arithmos Academy to assist students in evaluating their proficiency in mathematics. This project aims to provide a platform for pupils seeking to check their knowledge in mathematics. Additionally, I firmly believe that engaging in assessments aids in recalling past knowledge.

## Authors
- Girogi Kurtanidze ([GitHub](https://github.com/kurta17))

## Requirements
This project utilizes:
- [Laravel 11](https://laravel.com/docs/11.x/releases)
  For the database - [HeidiSQL](https://www.heidisql.com/)

## Environment Variables
Only the standard ones are required.

## Dev Installation Instructions
- Create a directory for the project.
- Clone the project into this directory.
- Run `composer install`.
- Create a configuration .env file: `cp .env.example .env`.
- Generate a key in the .env: `php artisan key:generate`.
- If using SQLite: execute `touch database/database.sqlite`.
- Migrate the tables: `php artisan migrate`.
- Seed data: `php artisan db:seed`.
