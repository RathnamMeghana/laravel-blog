# CineThoughts - A Laravel 8 Movie Blog

![home](https://github.com/RathnamMeghana/laravel-blog/assets/145559822/7cdba0b9-5cf9-4390-a5f8-6ee7a4a36ccf)<br>

![Screenshot 2024-03-14 004236](https://github.com/RathnamMeghana/laravel-blog/assets/145559822/96ee6d9d-9fd0-4107-a68e-ef4c230573c9)

## Project Description

CineThoughts is a online movie blog system specifically designed for users who are interested in movies and who love to share thoughts or reviews about them.This application will allow users to easily view, create, modify, and delete blog posts.The aim of this application is to explore the vast world of cinema together.Come on in and let's start talking movies!

## Author 
• Meghana Rathnam Kuppala: [@RathnamMeghana](https://github.com/RathnamMeghana) [![Button 1](https://img.shields.io/badge/%22GitHub%22-green.svg)](https://github.com/RathnamMeghana)

## Features
- **Account Registration/Login**: Secure access to CineThoughts movie blog.
- **Home**: User friendly and attractive home page that keeps the users engaged.
- **About**: Users can view the information and contact details of the blog owner in this page.
- **Contact**: Users can easily send emails to the blog owner through this page.
- **View Blog Posts**: Users can view a list of posts, as well as individual blog posts.
- **Create Blog Posts**: Users can easily visit the create form and create a new blog post once logged in.
- **Modify Blog Posts**: Users can easily visit the update form and update already existing blog post once logged in.
- **Delete Blog Posts**: Users can easily delete already existing blog post once logged in.
- **Comments**: Allows users to share thoughts and reviews about individual blog posts.
- **Search**: Allows users to easily search for a specific key word or a post.
- **Use Roles and Permissions**: Assign roles and permissions to users to control access to certain features and content.
- **Image Uploads**: Allows users to upload images to use in their blog posts.

## Technologies Used

<code><a href="https://laravel.com/docs/8.x/releases" target="_blank"> <img height="100" src="https://www.vectorlogo.zone/logos/laravel/laravel-ar21.svg"></a></code>
<code><a href="https://tailwindcss.com/" target="_blank"> <img height="100" src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-ar21.svg"></a></code>
<code><a href="https://www.mysql.com/" target="_blank"> <img height="100" src="https://www.vectorlogo.zone/logos/mysql/mysql-ar21.svg"></a></code><br>
<code><a href="https://www.w3schools.com/html/" target="_blank"> <img height="100" src="https://www.vectorlogo.zone/logos/w3_html5/w3_html5-ar21.svg"></a></code>
<code><a href="https://www.w3schools.com/css/" target="_blank"> <img height="100" src="https://www.vectorlogo.zone/logos/w3_css/w3_css-ar21.svg"></a></code>
<code><a href="https://www.w3schools.com/js/" target="_blank"> <img height="100" src="https://www.vectorlogo.zone/logos/javascript/javascript-ar21.svg"></a></code>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>
•	XAMPP

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone <repo - url>
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
Setup your mail credentials in the .env file <br>
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.office365.com            
MAIL_PORT=587
MAIL_USERNAME=<UserName>
MAIL_PASSWORD=<Password>
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=<MailAddress>
MAIL_FROM_NAME="${APP_NAME}"
```

Migrate the tables
```
php artisan migrate
```

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
