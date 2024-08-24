# Task Management System

A feature-rich Task Management System built with Laravel. This application allows users to manage tasks efficiently with functionalities like user authentication, task creation, editing, deletion, searching, filtering, email verification, and password management.

## Features

-   **User Authentication**: Secure login and registration functionality with a "Remember Me" option.
-   **Email Verification**: New users receive a verification email to confirm their account.
-   **Task Management**: Create, view, edit, and delete tasks. Tasks have attributes such as title, description, due date, priority, and status.
-   **Searching and Filtering**: Easily search and filter tasks by title, status, priority, or due date to find specific tasks quickly.
-   **Forgot Password**: Users can reset their password via email if they forget it.
-   **Responsive Design**: Built using Tailwind CSS for a responsive and modern user interface.

## Installation

Follow these steps to set up the Task Management System locally:

1. Clone the Repository

```bash
git clone https://github.com/yourusername/task-management-system.git
cd task-management-system
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

-   Register: Go to http://localhost:8000/register to create a new user account. After registration, a verification email will be sent to the provided email address.
-   Login: Go to http://localhost:8000/login to log in. Use the "Remember Me" option to stay logged in on the device.
-   Task Management:
    -   Create Task: Click the "Create Task" button on the dashboard to add a new task.
    -   View Tasks: View your tasks on the dashboard with details like title, due date, priority, and status.
    -   Edit Task: Click on a task to edit its details.
    -   Delete Task: Remove a task from the list.
-   Searching and Filtering:
    -   Search Tasks: Use the search bar to find tasks by title.
    -   Filter Tasks: Use the filters to narrow down tasks by status, priority, or due date.
-   Email Verification: After registering, you must verify your email address by clicking the verification link sent to your email.
-   Password Reset: If you forget your password, use the "Forgot Password?" link on the login page to reset it.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any changes.

## License

This project is open-source and available under the MIT License.
