# Laravel 10 LaraveL_Ecom_Site Project is Project is UnderWorking 

## Overview

This is a Laravel 10 LaraveL_Ecom_Site project . 

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.2
- Composer
- Node.js (for frontend dependencies)
- A database (MySQL)


Home
![screencapture-127-0-0-1-8001-2024-10-10-12_25_35](https://github.com/user-attachments/assets/4eb029b0-81c2-41ac-b8ba-3d4bc7c4e07a)


Login Page
![screencapture-127-0-0-1-8001-2024-10-10-12_31_25](https://github.com/user-attachments/assets/c991c522-bf98-4fb2-ac9f-19c966ef983a)

Order Recived
![screencapture-uomo-html-flexkitux-Demo18-shop-order-complete-html-2024-10-10-12_29_00](https://github.com/user-attachments/assets/8c524f54-cdf0-4ee5-8f7c-aa0202ff3407)

Shipping Cart
![screencapture-127-0-0-1-8001-shop-checkout-2024-10-10-12_28_39](https://github.com/user-attachments/assets/28a2c6f0-54a1-4b4f-a1b5-7a0d764fb24a)


Checkout
![screencapture-127-0-0-1-8001-Cart-2024-10-10-12_28_07](https://github.com/user-attachments/assets/477acbe9-a4e3-4209-b91d-cf847adb8a12)





## Installation

Follow these steps to install the project:

### 1. Clone the Repository

```bash
git clone https://github.com/Kunalverma320/LaraveL_Ecom_Site.git
cd fileupload

2. Install Dependencies
Install the PHP dependencies using Composer:

composer install

3. Environment Configuration
Copy the .env.example file to .env:

cp .env.example .env


Open the .env file and configure your database and application settings. Update the following fields accordingly:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password


Generate Application Key
Generate a new application key:

php artisan key:generate



Run Migrations
Run the database migrations to create the necessary tables:

php artisan migrate


Serve the Application
You can now serve the application using the built-in PHP server:

php artisan serve






