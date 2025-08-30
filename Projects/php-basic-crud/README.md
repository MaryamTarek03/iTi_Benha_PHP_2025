# PHP Basic CRUD Project

This project is a simple PHP-based CRUD (Create, Read, Update, Delete) application. It demonstrates basic operations on a `products` table in a MySQL database.

## Prerequisites

To run this project, ensure you have the following installed:
- **PHP** (version 7.4 or higher recommended)
- **MySQL** (or any compatible database server)

## Getting Started

### 1. Clone the Repository
Clone this repository to your local machine:
```bash
git clone https://github.com/MaryamTarek03/iTi_Benha_PHP_2025.git
```

### 2. Configure the Base URL
In the `config` file, the base URL is set to `http://localhost:3000` by default. If you need to change it, update the configuration accordingly.

### 3. Set Up the Database
Create a MySQL database and import the schema for the `products` table. Below is the schema:

```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
);
```

### 4. Start the Server
Make sure you're in the correct folder
```bash
cd Projects/php-basic-crud
```
Run the PHP built-in server using the following command:
```bash
php -S localhost:3000
```

### 5. Access the Application
Open your browser and navigate to `http://localhost:3000`.

## Features

- **Create**: Add new products to the database.
- **Read**  : View a list of all products.
- **Update**: Edit product details.
- **Delete**: Remove products from the database.

## Notes

- Ensure your database credentials are correctly configured in the project.
- If you change the base URL, make sure to update any relevant links or configurations.

Enjoy exploring the project!