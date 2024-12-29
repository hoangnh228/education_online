Education Online
Introduction
Welcome to Education Online, a comprehensive platform for online learning. This project is built using PHP 8.2.12, Composer 2.8.4, and Laravel 11.36.1. The platform allows users to view courses uploaded by teachers, purchase courses, add courses to their cart or wishlist, and make payments for non-free courses. Additionally, users can rate courses and leave comments.

Features
View Courses: Users can browse and view detailed information about various courses uploaded by teachers.

Purchase Courses: Users can purchase courses and gain access to premium content.

Cart and Wishlist: Users can add courses to their cart for purchase later, or save courses to their wishlist.

Checkout: Seamless checkout process for non-free courses.

Ratings and Comments: Users can rate courses with a star rating system and leave comments to provide feedback.

Technologies Used
PHP 8.2.12: The server-side scripting language used for the project.

Composer 2.8.4: Dependency manager for PHP.

Laravel 11.36.1: The web application framework used to build the project.

Getting Started
To get started with Education Online, follow these steps:
1. Clone the Repository: git clone https://github.com/hoangnh228/education_online.git
cd education-online
2. Install Dependencies: composer install
3. Setup Environment: cp .env.example .env
Copy the .env.example file to .env and update the environment variables as needed.
4. Generate Application Key: php artisan key:generate
5. Run Migrations: php artisan migrate
6. Serve the Application: php artisan serve

Now you should be able to access the application at http://localhost:8000.

Contributing
We welcome contributions to Education Online. If you have suggestions or improvements, please feel free to submit a pull request.

License
This project is licensed under the MIT License - see the LICENSE file for details.