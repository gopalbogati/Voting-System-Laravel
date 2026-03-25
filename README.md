# 🗳️ Voting System - Laravel

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat&logo=tailwind-css&logoColor=white)

A full-featured **online voting system** built with Laravel and styled with Tailwind CSS. Users can register, log in, browse candidates, cast votes, and view live results.

---

## ✨ Features

- 👤 User registration and authentication
- 🗺️ Browse candidates and voting options
- ✅ Cast votes securely (one vote per user)
- 📊 Live result tallying and display
- 🔒 Vote integrity protection
- 📱 Responsive UI with Tailwind CSS
- 🔍 Search bar for filtering candidates

---

## 🛠️ Tech Stack

| Technology | Purpose |
|---|---|
| PHP 7+ | Server-side language |
| Laravel 8.x | MVC Framework |
| Tailwind CSS | UI Styling |
| MySQL | Database |
| Blade Templates | Views |
| Eloquent ORM | Database interaction |

---

## 🚀 Getting Started

```bash
# Clone the repository
git clone https://github.com/gopalbogati/Voting-System-Laravel.git
cd Voting-System-Laravel/voting-system

# Install dependencies
composer install
npm install && npm run dev

# Copy environment file
cp .env.example .env

# Configure your database in .env
DB_DATABASE=voting_db
DB_USERNAME=your_user
DB_PASSWORD=your_password

# Generate app key
php artisan key:generate

# Run migrations and seed
php artisan migrate --seed

# Start server
php artisan serve
```

Visit `http://localhost:8000`

---

## 📁 Project Structure

```
Voting-System-Laravel/
└── voting-system/
    ├── app/Http/Controllers/   # Vote, User, Result controllers
    ├── database/migrations/    # DB schema
    ├── resources/views/        # Blade templates
    ├── routes/web.php          # Web routes
    └── public/                 # Entry point & assets
```

---

## 👤 Author

**Gopal Bogati**
- GitHub: [@gopalbogati](https://github.com/gopalbogati)
- LinkedIn: [Gopal Bogati](https://au.linkedin.com/in/gopal-bogati-4164b7b8)
- Location: Sydney, Australia
