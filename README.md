# Mini Real Estate Management App

This is a mini application for storing real estate information and displaying it with a Persian-language user interface.

## Features

- Store property information including address, area, price, and year.
- Display stored information in a user-friendly interface.
- Fully compatible with Persian language characters.

## Prerequisites

- PHP >= 8.2  
- Composer  
- Laravel 11 
- A web server like Apache or Nginx
- Basic knowledge of MySQL and PHP


</br>

## Setup

Before using the application, create a MySQL database named `melk` (or any name you prefer) with the following query:

```sql
CREATE DATABASE IF NOT EXISTS melk
CHARACTER SET utf8
COLLATE utf8_persian_ci;
```

### After cloning the repository, follow these steps to set up the Laravel project.

#### Run the following command in your terminal to install all required packages:
For For Windows (CMD):
```CMD
composer install
copy .env.example .env
```
For Linux / macOS:
```bash
composer install
cp .env.example .env
```

In the .env file, set the following configuration values:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=melk
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Then in terminal:
```bash
php artisan key:generate
php artisan migrate
php artisan serve
```



## Licence
- This project is open source and free to use.
- copyrighted by A.MAHAM.
- All rights reserved © 2025.

