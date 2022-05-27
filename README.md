## Laravel Simple Admin Panel


<!-- <a href="https://packagist.org/packages/aler998/laraveladminpanel"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/aler998/laraveladminpanel"><img src="http://img.shields.io/packagist/v/tymon/jwt-auth.svg?style=flat-square&logo=composer" alt="Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> -->
[![Issues](https://img.shields.io/github/issues/Aler998/SimpleAdminPanel?style=flat-square&logo=composer)](https://github.com/Aler998/SimpleAdminPanel)
[![Stars](https://img.shields.io/github/stars/Aler998/SimpleAdminPanel?style=flat-square&logo=composer)](https://github.com/Aler998/SimpleAdminPanel)


## About Simple Admin Panel

This is a project based on laravel with breeze authentication and a simple bootstrap admin panel

## Features

- Simple to Manage
- Laravel breeze authentication system
- StartBootstrap Admin panel
- Datatables and Chart

## Installation

Create a project via composer

```sh
composer create-project aler998/laraveladminpanel myLaravelProject
```

Then install dependencies
```sh
npm install && npm run dev
```

Set .env file
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourDBname
DB_USERNAME=yourDBuser
DB_PASSWORD=yourstrongpwd
```

Run the migrations
```sh
php artisan migrate
```


Finally serve the application
```sh
php artisan serve
```

