# LOCALIZATION MANAGER

The sample project was developed with Laravel 5.

## Requirements

- Laravel 5.5 (LTS)
- PHP 7.0+
- mySQL

## Installation

- Project clone.
- Composer : `$ composer install`
- Database Configure : '.env'
- Migrate Create : `$ php artisan migrate`
- Seed Run : `$ php artisan db:seed`
- ... or Sql Dump : `localization-manager.sql`

## Test Login Information

- User ("/"): `john@deo.com - 123456`
- Admin ("/admin") : `administrator@test.com - 123456`

## API Demo Test

Languages

- *GET :* /api/v1/languages

Locale

- *GET :* /api/v1/locale/{project_id}/{version?}/{language_code?}/{keyword?}

*Example :* 

- /api/v1/locale/1/filter?keyword=web
- /api/v1/locale/1/filter?keyword=web&version=0.0.3
- /api/v1/locale/1/filter?keyword=web&version=0.0.3&language_code=en

## Custom Packages 

- laravelcollective/html
- maatwebsite/excel

## New Languages

- `resources/lang/...` define language under directory: EN-DE-RU
- `config/app.php` change line: 'locale' => 'en'

## Admin ve User Screens

![Admin](https://user-images.githubusercontent.com/3058102/51963228-ee568f80-2473-11e9-93a9-e7470d5e5513.png)

![User](https://user-images.githubusercontent.com/3058102/51963257-075f4080-2474-11e9-8f50-7b9cc11d39d3.png)