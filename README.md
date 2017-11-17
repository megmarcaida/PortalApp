<p align="center"><a href="https://laravel.com" target="_blank"><img width="150"src="https://laravel.com/laravel.png"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


# PortalApp
![alt text](https://github.com/megmarcaida/PortalApp/blob/master/portal/src/assets/img/portal.png)

<h3>Installation</h3>
<hr>
<pre>$cd portal && npm install</pre>
<pre>$cd laravel-api && composer install</pre>

# laravel-api
- Don't **forget** to start `mysql` server, if you use `mysql` or database will not connect.
- First clone via `git bash` or download it. It is a RESTful api.
- Run this command in your terminal

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
