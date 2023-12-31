## Chirper Laravel Project

## Overview

Chirper is a Laravel-based short messaging or blogging platform that allows the users to share short messages or blogs. It provides a
simple and efficient way to connect to other users in real-time. The key features of this application includes posting chirps, editing
or deleting chirps according to needs, and sending the notification of new chirps or blogs to the users.

## Installation Steps
### Prerequisites
Before the configuration of Chirper Laravel Project, we have to confirm installation of following:

- PHP (version 7.4 or higher)
- Composer
- Database (e.g., SQLite, MySQL)

## Clone the Repository

```
git clone https://github.com/Sainjurohan/chirper
cd chirper
```

## Install Dependencies
Run the command below to install the project dependencies defined in 'composer.json'.
```
composer install
```

Also, for the front-end dependencies, run the command below.
```
npm install
```

Finally, to build the assets run the following command.
```
npm run dev
```

## Environmental Configuration

After cloning the chirper project, copy the example environment configuration file and update it with your database credentials.
```
cp .env.example .env
```

Some of required parameter details are:
DB_CONNECTION=sqlite

## Database Setup

The SQLite database can be created following the command below. You also can use another database (i.e., Postgres, MySQL) for this, simply update the configuration accordingly.
```
touch database/database.sqlite
```

Also, for database migrations run following command.
```
php artisan migrate
```

Also, to run database seeder consider following command.
```
php artisan db:seed
```

The following command can aslo be used to migrate the database tables and seed with sample data.
```
php artisan migrate --seed
```

## Run the Application

Finally, start the Laravel development server.
```
php artisan serve
```
## Acess the Application

visit http://localhost:8000/ in your web browser, where you can access the application.

## Usage and Testing

### Key Features

- Chriping: Login the application after registeration and start chirping by creating short messages or mini-blogs.

- Edit/Delete Chirps: The user is provisioned to edit or delete the chirped posts.

- Chirp Notification: Every user is notified of new chirp through the email.

- Timeline: The chirps are arranged on basis of the latest chirps mentioning their time of post. 

### Sample Data and Testing

The seeded data can be used as sample data to test the Chirper Application or new account can be created.

## Contributing and Issues

We welcome contributions!, Thank you for considering contributing to this Project. If you find a bug or have a feature request, please open an issue on the [GitHub repository](https://github.com/Sainjurohan/chirper/issues).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact Information

For support or inquiries, contact us at sainju34@gmail.com.
