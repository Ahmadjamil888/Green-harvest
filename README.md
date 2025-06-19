# Green Harvest

Green Harvest is a Laravel-based web application focused on promoting sustainable farming and bridging the gap between farmers and consumers. The platform empowers local farmers by allowing them to list products, manage inventory, and connect directly with customers, while users can explore and purchase fresh, locally-sourced agricultural goods.

## Features

- Farmer and customer registration and login system
- Secure shopping cart and checkout process
- Order tracking and history for customers
- Clean, responsive frontend layout
- Admin panel for user and product management

## Installation

1. Clone the repository:

   ```
   git clone https://github.com/yourusername/green-harvest.git
   cd green-harvest
   ```

2. Install dependencies:

   ```
   composer install
   npm install && npm run dev
   ```

3. Configure the environment file:

   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up the database in your `.env` file, then run:

   ```
   php artisan migrate --seed
   ```

5. Start the development server:

   ```
   php artisan serve
   ```

## Technologies Used

- Laravel (PHP Framework)
- MySQL or MariaDB
- Laravel Breeze for Authentication
- JavaScript and Blade Templating
- CSS (custom or Bootstrap)

## Purpose

Green Harvest aims to support sustainable agriculture by enabling direct-to-consumer sales and reducing dependency on intermediaries. It enhances transparency, increases farmer income, and ensures consumers receive fresh produce.

## License

This project is open-source and available under the MIT License.
