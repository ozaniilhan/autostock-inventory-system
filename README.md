# AutoStock 🚚📦

**AutoStock** is a Laravel-based Inventory and Order Management System designed for manufacturers and businesses to easily manage their stock, categories, and order workflows. It features a clean AdminLTE-powered dashboard, role-based authorization, and an intuitive interface for seamless control.

---

## 🚀 Features

- Built with Laravel 12.x
- Admin dashboard integrated with AdminLTE 3
- Role-based access control (Admin / User)
- Product management (stock, price, category assignment)
- Category management
- Order creation & status tracking
- Dashboard with data summaries and statistics
- Seeder-based test data generation for fast bootstrapping

---

## 🛠️ Installation

```bash
git clone https://github.com/ozaniilhan/Uretim-Bilgi-Sistemleri.git
cd Uretim-Bilgi-Sistemleri

# Install PHP & JS dependencies
composer install
npm install && npm run dev

# Set up environment
cp .env.example .env
php artisan key:generate

# Configure .env (DB, etc.)
php artisan migrate --seed

# Start development server
php artisan serve
