# Project EVENTS GC

Welcome to the Laravel EVENTS GC! This is an event management system developed in Laravel.

## Overview

The Laravel Events Project is a web application that allows users to create, view and manage events. It offers features like:

- Registration of new events with name, description and image.
- Detailed view of events.
- Editing and deleting existing events.

## Technologies Used

- [Laravel](https://laravel.com) - PHP framework used for application development.
- [MySQL](https://www.mysql.com) - Database management system.
- HTML, CSS, JavaScript - Standard web technologies for building the interface.

## System Screens

<table>
  <tr>
    <td><img src="https://github.com/cunhatalisca/project-laravel-events/blob/image/images/tela1-eventgc.png" alt="Tela 1 - home"></td>
    <td><img src="https://github.com/cunhatalisca/project-laravel-events/blob/image/images/tela2-eventgc.png" alt="Tela 2 - home"></td>
  </tr>
</table>

## Database Screens

<table>
  <tr>
    <td><img src="https://github.com/cunhatalisca/project-laravel-events/blob/image/images/bancodedados.png" alt="Database"></td>
    <td><img src="https://github.com/cunhatalisca/project-laravel-events/blob/image/images/tabela-eventos.png" alt="Table events"></td>
      <td><img src="https://github.com/cunhatalisca/project-laravel-events/blob/image/images/tabela-users.png" alt="Table Users"></td>
  </tr>
</table>

## Settings

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/cunhatalisca/project-laravel-events.git

- Copy the .env.example file to .env and set the environment variables including database connection.
  ```bash
  cp .env.example .env

- Open the .env file and configure database settings such as database name, user and password:
  ```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database
  DB_USERNAME=your_user
  DB_PASSWORD=your_password

- Run the migrations to create the database tables:
  Run the command below to run the migrations and create the necessary tables in the database:
  ```bash
  php artisan migrate
  (This will create the event tables and other related tables in the configured database.)

- Start the development server:
  ```bash
  php artisan serve

- Access the application in the browser:
  Now you can access the application in the browser using the following link: http://localhost:8000.
  Make sure the development server is running while working on the application.

## How to Contribute
- Fork this repository.
- Create a new branch for your changes:
  ```bash
  git checkout -b my-new-feature
  
- Make the desired changes and make commits:
  ```bash
  git commit -m "Add resource X"

- Make a push to your fork:
  ```bash
  git push origin my-new-feature

- Create a Pull Request on this repository.




