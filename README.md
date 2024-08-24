# Task Management System

A feature-rich Task Management System built with Laravel. This application allows users to efficiently manage tasks with functionalities like user authentication and task management. Users can create, view, edit, and delete tasks. The system also provides searching and filtering options to easily find specific tasks. The Task Management System has a responsive design for a modern user interface.

## Installation

Follow these steps to set up the Task Management System locally:

1. Clone the Repository

```bash
git clone https://github.com/RezdarNajeeb/Task-Management-System.git
cd Task-Management-System
```

2. Install Dependencies

Install PHP dependencies using Composer:

```bash
composer install
```

3. Set Up Environment Configuration

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Generate an application key:

```bash
php artisan key:generate
```

Update the `.env` file with your database and mail configuration:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_email@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

4. Run Migrations

Run the database migrations to set up the necessary tables:

```bash
php artisan migrate
```

5. Seed the Database (Optional)

If you have seed data for testing purposes, you can run the seeder:

```bash
php artisan db:seed
```

6. Serve the Application

Start the development server:

```bash
php artisan serve
```

Your application will be running at http://localhost:8000.

## Usage

-   Register: Go to http://localhost:8000/register to create a new user account.
-   Verify Email: Check your email for a verification link.
-   Task Management:
    -   Create Task: Add a new task on the dashboard.
    -   View Tasks: See your tasks with details like title, due date, priority, and status.
    -   Edit Task: Modify task details.
    -   Delete Task: Remove a task from the list.
-   Searching and Filtering:
    -   Search Tasks: Find tasks by title using the search bar.
    -   Filter Tasks: Narrow down tasks by status, priority, or due date.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any changes.

## License

This project is open-source and available under the MIT License.
