  # Hotel Management System

Welcome to the Hotel Management System project !!! <br>
This web application is built using the Laravel framework to provide a comprehensive solution for managing hotel operations efficiently.


## Table of Contents
- Features
- Technologies Used
- Requirements
- Installation
- Usage
- License


## Features

- User Authentication: Secure user authentication system with role-based access control.

- Hotel and Room Management: Upload hotel details including room types, facilities, and pricing. Manage room inventory, availability, and pricing.

- Hotel and Room Management: Add, edit, and delete Hotel and room details ..

- Guest Management: Manage guest profiles, including personal details and booking history.

- User Management: Admins can add, edit, and delete user accounts with different roles and permissions.

- Admin Dashboard: A comprehensive dashboard for administrators to monitor and manage all aspects of the system.

- All type of list can Export in  JSON file , CVS and Pdf


## Technologies Used

- Laravel 
- MySql
- HTML/CSS
- Bootstrap
- JavaScript

## Requirements

- PHP >= 8.2.12
- Composer
- Laravel >= 10.x Version
- MySQL database Used in this Project.
- XAMPP or any other local server environment

## Installation

1) Clone the repository:

```bash
git clone https://github.com/Samant77/hotel-management-system.git

```
```bash
cd hotel-management-system
```
2) Install dependencies:

```bash
composer install
npm install
npm run dev

```

3) Copy the .env.example file to .env and set up your environment variables:

```bash
cp .env.example .env
```
4) Generate an application key:
```bash
php artisan key:generate
```
5) Set up your database:

- Configure your database settings in the .env file.

6) Import the SQL file into your database:

 - Open PHPMyAdmin (or your preferred database management tool).
- Create a new database (e.g., amaxjobs_hms).
- Import the database.sql file located in the root of the project into the newly created database.

7) Move the project to your XAMPP htdocs directory:
- Move the project folder to C:/xampp/htdocs/hotel-management-system.

8) Access the project in your browser:
- Open your browser and go to http://localhost/hotel-management-system.

## Usage

- Register an account or login using an existing account.
- Navigate to the dashboard to view hotel statistics and operations.
- Manage rooms, bookings, and customers using the provided interfaces.
- Display on webside to upload a hotel and its Room.
- Customer can view the Hotel and Booking a Room.



## License

- This project is licensed under the MIT License. See the LICENSE file for details.

