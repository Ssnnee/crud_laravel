<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to use
```
git clone https://github.com/Ssnnee/crud_laravel.git
cd crud_laravel
composer  install
php artisan migrate
php artisan server
```

## Process to acheive this
+ Create
`
composer create-project --prefer-dist laravel/laravel name_project
`
+ To install front-end dependencies
`
npm install
`
+ Create db
```
mysql -u root -h localhost -p
create database db;
```
Then need to update the .env
+ Create model
`
php artisan make:model ModelName --migration
`
+ Open  database/migrations/xxxxxx_create_... update it
Then
`
php artisan migrate
`
+ Update the Model
+ Create controller
`
php artisan make:controller ModelController --resource
`
Then update it
+ Create route
`
Route::resource('students', 'App\Http\Controllers\StudentController');
`
That's pretty  much it

