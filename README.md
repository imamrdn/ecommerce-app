# Laravel E-Commerce Project

The E-commerce Product Management System is designed to streamline the process of managing products and their stock levels within an online store. This system allows administrators to add, edit, view, and delete products, as well as manage the associated stock quantities for each product. The system ensures that the status of each product is dynamically updated based on the availability of stock.

## Main Features

-   **User Authentication**: User registration and login.
-   **Admin Authorization**: CRUD Products

## Installation

1. Clone this repository to your local machine
    ```sh
    git clone https://github.com/imamrdn/ecommerce-app.git
    ```
2. Directory entry
    ```sh
    cd auth-lareact
    ```
3. Install PHP dependencies using Composer
    ```sh
    composer install
    ```
4. Install JavaScript dependencies using npm
    ```sh
    npm install
    ```
5. Copy the .env.example file into .env and customize the database configuration
    ```sh
    cp .env.example .env
    ```
6. Generate the application key and run the database migration
    ```sh
    php artisan key:generate
    php artisan migrate
    ```
7. You can use the account provided in the seeder

    ```sh
    php artisan db:seed

    ADMIN SIDE
    Email   : super@admin.com
    Pass    : password

    CUSTOMER SIDE
    Email   : super@admin.com
    Pass    : password
    ```

8. Run the Laravel server
    ```sh
    php artisan serve
    ```
