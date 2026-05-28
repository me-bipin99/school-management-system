# School Management System

A PHP-based school management system that supports role-based authentication, student and teacher registration, admission approval workflows, news and notice publishing, and basic administrative dashboards.

## Overview

The application includes:

- Public homepage with featured notices and course details
- Role-based login for `student`, `teacher`, and `admin`
- Signup flow for students and teachers that requires admin approval
- Admin dashboard with student, teacher, inquiry, notice, and approval management
- News publishing and display for the public site
- Inquiry collection and response tracking

## Key Features

- Multi-role authentication:
  - Student login
  - Teacher login
  - Admin login
- User registration with approval workflow for students and teachers
- Dashboard metrics for total students, teachers, inquiries, and pending approvals
- CRUD management for students, teachers, notices, and news
- Inquiry submission form and inquiry management
- Course details pages for BBS, BIM, and CSIT

## Project Structure

- `index.php` — public landing page and homepage
- `login.php` — login page with signup modal
- `signup_details.php` — signup submission and validation
- `login_details.php` — login processing for role-based access
- `admin/` — admin panel pages and management flows
- `includes/dbcon.php` — database connection settings
- `school_ms.sql` — MySQL database schema and sample data
- `css/` — custom styles
- `plugins/` — Bootstrap, AdminLTE, jQuery, and related assets
- `courseDetails/` — separate course pages for BBS, BIM, and CSIT

## Database Schema

The included `school_ms.sql` contains the following tables:

- `admin` — admin credentials
- `student` — accepted student records
- `teacher` — accepted teacher records
- `user_form` — pending student/teacher signup requests and approvals
- `news` — published news items
- `notice` — published notices
- `inquires` — contact inquiries submitted by visitors
- `studentinquiry` — student inquiry/reply history

## Installation

1. Install a PHP development environment such as XAMPP, WAMP, or MAMP.
2. Create a MySQL database named `school_ms`.
3. Import `school_ms.sql` into the MySQL database.
4. Update `includes/dbcon.php` if your DB credentials differ from the default:
   - host: `localhost`
   - database: `school_ms`
   - user: `root`
   - password: ``
5. Place the project in your web server document root.
6. Open the site in a browser and navigate to `login.php`.

## Default Admin Credentials

- Username: `admin`
- Password: `admin`

## Notes

- Student and teacher registrations are stored in `user_form` and must be approved by the admin before login.
- The code currently uses plain-text password storage, so consider adding password hashing for production.
- The admin panel is located under `admin/` and includes pages for managing students, teachers, notice publishing, and approval requests.

## Technologies Used

- PHP
- MySQL / MariaDB
- HTML
- CSS
- Bootstrap
- jQuery
- FontAwesome

## Improvements

To make this project more secure and maintainable, consider:

- using password hashing (`password_hash` / `password_verify`)
- adding prepared statements to prevent SQL injection
- separating reusable components into includes and templates
- improving validation and error handling
- implementing access control for each user role

