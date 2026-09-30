# Tasks for Today Management System

IT0049 (Web System Technologies) · Technical Summative Assessment 1
Built with **CodeIgniter 4.5** (PHP 8.1+) and **MySQL**.

| Page | URL | What it shows |
| --- | --- | --- |
| Welcome | `/` | Only tasks where `task_date` equals today |
| Task List | `/tasks` | Every task, ordered by date |
| Profile | `/profile` | The single demo user |
| About | `/about` | Static page identifying the developer |

## Run it locally (XAMPP)

1. Copy this folder into `C:\xampp\htdocs\` (any folder name works).
2. Start **Apache** and **MySQL** in the XAMPP Control Panel.
3. Create the database using **one** of these options:
   - **Option A (phpMyAdmin):** open `http://localhost/phpmyadmin` → **Import** → choose `database/tasks_for_today.sql` → **Go**.
   - **Option B (migration + seeder):** in phpMyAdmin create an empty database named `tasks_for_today`, then in a terminal inside the project folder run:
     ```
     php spark migrate
     php spark db:seed DatabaseSeeder
     ```
4. Open `http://localhost/<folder-name>/`.

Database settings live in `app/Config/Database.php` (default XAMPP: user `root`, empty password, database `tasks_for_today`).
The base URL is auto-detected, so no manual URL configuration is needed.

## Project structure

```
app/Controllers/   Home, Tasks, Profile, About
app/Models/        TaskModel (getToday, getAllByDate), UserModel (getDemoUser)
app/Views/         layouts/main.php, welcome, tasks, profile, about
app/Database/      Migrations/ (tasks, users) and Seeds/ (TaskSeeder, UserSeeder)
database/          tasks_for_today.sql (database export)
public/            index.php, assets/css/style.css
```

## Notes

- The seeder and SQL export use dates relative to the day they run, so there are always records for **today**.
- Sample data: 10 tasks across 4 dates (yesterday, today, +1 day, +2 days) and exactly 1 demo user.
- Do not use Option A and Option B on the same database (tables would already exist).

## Deploying to a host

Upload the whole folder (including `vendor/`), import `database/tasks_for_today.sql` on the host's MySQL,
then set the host's database credentials in a `.env` file (see `env` for the format) or in `app/Config/Database.php`.
If the host lets you choose a document root, point it to `public/`; otherwise the root `.htaccess` already forwards requests there.
