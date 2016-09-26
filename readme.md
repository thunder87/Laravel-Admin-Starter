# Laravel Admin Starter
Basic package with Laravel 5.3 + Admin-LTE

# NOTE
Package has been updated to Laravel 5.3 - users on Laravel 5.2 - please refer to the "Laravel-5.2" branch

# Components
+ Laravel 5.3
    - Login/Logout/Register/Forgot Password
    - User Edit Profile Page
    - Admin panel with Registered Users overview
+ Admin-LTE theme
+ Toastr Messaging system
+ SweetAlert2

# Installation

1. Clone the project into a folder of your choice with
   "git clone https://github.com/thunder87/Laravel-Admin-Starter.git ."
2. Through composer run "composer install"
3. (To get the latest packages, run composer update)
4. Edit the .env.example file with your database information and save it as .env
5. Run "php artisan key:generate" to generate a key for your application
6. Run "php artisan migrate" to populate the or "php artisan migrate --seed" to add a seed user

### Seed user:
+ Email: test@test.com
+ Password: test123

## Official Documentation

Documentation for the framework can be found on the [AlmSaeedStudio website](https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html).
Toastr documentation can be found [Here](https://github.com/oriceon/toastr-5-laravel)
SweetAlert documentation can be found [Here](https://limonte.github.io/sweetalert2/)

## License

The Laravel Admin Starter is licensed under the [MIT license](http://opensource.org/licenses/MIT)
