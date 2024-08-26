<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

- Laravel 11 or ^11
- PHP ^8

# Step For Developement
1- Pass variable env 
2- Edit routes in routes/web.php
3- Create PayPal Controller => app/Http/Controllers/PayPalController.php
4- Create configuration => config/paypal.php
5- Create views page that has button for pay => resourses/views/paypal.blade.php


# Note something
=> PayPal Mode could be 'sandbox' or 'live' 
- Testing is sandbox mode
- Real payment is live mode
=> Should enable SSL on production
