# TrendyShip (laravel)

TrendyShip is an online store developed in Laravel that allows owners and administrators to easily manage and monitor all aspects of online sales. Through an intuitive control panel, you can manage orders and user details, including information about their account, order history and delivery addresses.

With TrendyShip, you can create and manage new products, as well as update and manage inventory. Through the integrated payment functionality, customers can easily and securely pay for purchased products. You can also manage shipping and delivery options, including calculating shipping fees and shipping internationally.

This online store is simple and easy to use for both owners and users, optimized for a seamless shopping experience. TrendyShip is a complete solution for creating and managing an efficient and functional online store with all the necessary features to help you grow your online business.

## Installation

1. Install the dependencies: `composer install` and `npm install`
2. Copy the .env.example file and rename it as .env: `cp .env.example .env`
3. Generate the security key: `php artisan key:generate`
4. Configure the .env file with the database details
5. Run database migrations: `php artisan migrate`
6. Populate the database with test data: `php artisan db:seed`

## run

- Run the PHP server: `php artisan serve`
- Run the Vite server: `npm run dev`
