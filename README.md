<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h1 align="center">Brgy. Poblacion Bacuag Water District</h1>

<p align="justify">Online water billing system with SMS notification. Surigao Del Norte State University - BSIT 3rd Year Capstone Project.</p>
•   Author: <a href="https://abby2727.github.io/my-portfolio/"> Abdul Pangandaman </a> <br>
•   Twitter: <a href="https://twitter.com/abby_2727"> @abby_2727 </a> <br>
•   Instagram: <a href="https://www.instagram.com/abbyyyyys_/"> @abbyyyyys_ </a> <br>

## Objectives
•   To identify the problem between the consumer and the water district department with regards to water facilities and services. <br>
•   To create and design a web-based application that provides better services in line with the billing information and water status as well as collect feedback for the improvement of the service. <br>
•   To evaluate the functionality of the proposed system. <br>

## Requirement
•   PHP 8.0.2 or higher

## Installation
Setting up your development environment on your local machine:
```
git clone https://github.com/abby2727/poblacion-water-bill.git
cd poblacion-water-bill
composer install
php artisan key:generate
php artisan migrate
php artisan optimize
php artisan serve
```
## Before Starting

Create Database and Set-up db credential on .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=water-billing-system
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
