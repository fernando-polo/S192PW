# Web Programming - Course 🖥️

Course repository for the Web Programming class. Contains exercises, practices, and projects developed throughout the semester using the Laravel PHP framework.

## 📌 Description

This repository documents the progressive learning of web development with Laravel, from environment setup to building a fully functional CRUD application.

Each folder corresponds to a specific practice or partial project, following the MVC architecture and covering core Laravel concepts such as routing, Blade templating, controllers, form handling, validations, and database management.

## 📦 Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade Templates, Bootstrap 5, JavaScript
- **Database:** MySQL
- **Tools:** Laravel Herd, DBngin, TablePlus, Vite, Artisan CLI

## 📁 Repository Structure

| Folder | Description |
|---|---|
| `IntroLaravel` / `Copia de IntroLaravel` | Initial Laravel setup and introduction exercises |
| `practicaRepasos` | Review and reinforcement exercises |
| `PruebaP` | Practice exam or test preparation |
| `Final1erP` | First partial final project |
| `2doP` | Second partial practices |
| `PExamen2` | Second partial exam practice |
| `Final2P` | Second partial final project — complete client CRUD |

## 📋 Topics Covered

**Partial 1 — Fundamentals**
- Environment setup: Laravel Herd, DBngin, TablePlus
- Project creation and `.env` database configuration
- Bootstrap 5 and Vite integration
- Basic routing with `Route::view()` and named routes
- Blade views and master layout inheritance

**Partial 2 — Components, Controllers & Forms**
- Reusable Blade components (Card, Alert)
- Resource controllers with Artisan (`php artisan make:controller -r`)
- HTTP request handling (GET, POST) and CSRF protection with `@csrf`
- Server-side validations with `withErrors()` and `withInput()`
- Flash messages with `session()->flash()`
- Form Requests (`php artisan make:request`)
- Internationalization with `laravel-lang` and the `__()` helper

**Partial 3 — Database & CRUD**
- Migrations and seeders (`migrate`, `migrate:refresh`, `db:seed`)
- Query Builder: `DB::table()->insert()`, `get()`, `update()`, `delete()`
- Full CRUD for a `clientes` table with dynamic routes (`{id}`)
- `@method('PUT')` and `@method('DELETE')` in forms
- Delete confirmation with SweetAlert

## ⚙️ How It Works

The application follows Laravel's MVC architecture. The React frontend communicates with the backend through defined routes, which delegate logic to resource controllers. Each controller method handles a specific CRUD operation using the Query Builder to interact with the MySQL database through migrations-defined tables.

Blade templates handle the UI layer, using layouts, components, and `@foreach` directives to render dynamic data. Validations are applied server-side and feedback is delivered via flash messages and inline error display.

## 🚀 Final Project Scope

The `Final2P` project integrates all the semester's concepts into a complete client management system:

- Full CRUD (Create, Read, Update, Delete) for a `clientes` table
- Validated form inputs with user-friendly error messages
- Localized UI text using the internationalization system
- Visual feedback on every action (success/error flash messages)
- Confirmation dialogs before destructive operations

## 📚 What I Learned

- MVC architecture and its implementation in Laravel
- Route definition and resource controller structure
- Blade templating system: layouts, components, and directives
- Server-side form validation and error handling
- Database design using migrations and seeders
- Data manipulation with Laravel's Query Builder
- Internationalization and language configuration in Laravel
- Integration of frontend tools (Bootstrap 5, Vite) in a PHP project
