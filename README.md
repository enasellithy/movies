<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework
Is Fetch Movie Data
**Laravel** Version is 10

## Requirements
- php 8.1
- composer

## Install[FetchDataRepository.php](..%2F..%2Flaravelapp%2Fredit%2Fapp%2FSOLID%2FRepositories%2FFetchDataRepository.php)
- git clone https://github.com/enasellithy/movies.git
- cd movies[FetchDataRepository.php](..%2F..%2Flaravelapp%2Fredit%2Fapp%2FSOLID%2FRepositories%2FFetchDataRepository.php)
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan serv --port=8000

## API
- this api service provider https://api.themoviedb.org
- every page get 20 items in array

## API
- Fetch Data for all movies http://localhost:8000/api/movies?page={page}
- Fetch Data for all movies http://localhost:8000/api/tv?page={page}

## Storing Data
- php artisan firebase:app Notes (make sure when run this command is server is running on port 8000)

## Fetch Data From Firebase 
- /api/get_data_all => GET Type To Fetch All Data
- /api/get_data_movies => GET Type To Fetch All Movies (Notes every page have 10 items need to add (?page={page}) in url to get next 10 )
- /api/get_data_tv => GET Type To Fetch All Tv (Notes every page have 10 items need to add (?page={page}) in url to get next 10 )
