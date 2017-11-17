# Angular Portal Application
![alt text](https://github.com/megmarcaida/PortalApp/blob/master/portal/src/assets/img/portal.png)



This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 1.4.4.

### Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

### Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).


# angular-laravel
- First clone via `git bash` or download.
- Go to your root folder and run this command
```
npm install
```
- Run your `angular` app by this command
```
ng serve -o
```

<p align="center"><a href="https://laravel.com" target="_blank"><img width="150"src="https://laravel.com/laravel.png"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# laravel-api
- Don't **forget** to start `mysql` server, if you use `mysql` or database will not connect.
- First clone via `git bash` or download it. It is a RESTful api.
- Run this command in your terminal
```
cd laravel-api
```
```
composer install
```
- Rename `.env.example` file to `.env`
```
cp .env.example .env
```
- Run this command to generate key
```
php artisan key:generate
```
- Create your database and connect it via `.env` file.
- Run this command to migrate your database
```
php artisan migrate
```
- Using [laravel/passport](https://github.com/laravel/passport) to generate valid `token`. Please run these command to configure passport.
```
php artisan passport:install
```
```
php artisan passport:keys
```

- Run this command to live your RESTful api
```
php artisan serve
```

- Please navigate at `http://localhost:8000`

## Latte
