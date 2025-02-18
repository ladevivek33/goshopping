# GoShopping

## Overview
GoShopping is a web-based shopping platform designed to provide users with a seamless shopping experience. It includes user authentication, a navigation system, and multiple modules for product management and user interaction.

## Features
- **User Authentication**: Sign up and sign in functionalities.
- **Navigation System**: A well-structured menu for ease of access.
- **Product Management**: Different PHP files handling product categories.
- **Database Connection**: Secure connections to manage user and product data.
- **Logout Functionality**: Ensures user security by allowing them to log out.

## Directory Structure

```
└── ladevivek33-goshopping/
    ├── README.md        # Project documentation
    ├── index.php        # Main entry point
    ├── home.php         # Home page of the website
    ├── aboutas.php      # About us page
    ├── menu.php         # Menu for site navigation
    ├── nav.php          # Navigation bar component
    ├── signin.php       # Sign-in page
    ├── signup.php       # Sign-up page
    ├── logout.php       # Logout functionality
    ├── conn.php         # Database connection file
    ├── Various PHP Files: Product and category management (bdb.php, dcb.php, wtb.php, etc.)
```

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/your-repo/ladevivek33-goshopping.git
   ```
2. Navigate to the project directory:
   ```sh
   cd ladevivek33-goshopping
   ```
3. Set up the database:
   - Create a database in MySQL.
   - Import any necessary SQL files.
   - Update `conn.php` with your database credentials.
4. Start a local server using XAMPP or another PHP environment:
   ```sh
   php -S localhost:8000
   ```
5. Open `http://localhost:8000/index.php` in your browser.

Screenshots
Home Page
![Calculator Interface](img/homeo.jpg)
Product Listing

Shopping Cart

Admin Dashboard

Note: Ensure the screenshots directory contains the above images.

## Contributing
Feel free to contribute by submitting pull requests.

