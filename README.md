# Laravel Chat App

## 📌 Requirements
- PHP >= 8.1
- Composer
- MySQL / PostgreSQL / SQLite (pilih salah satu)
- Node.js & NPM (untuk asset management)

## 🚀 Installation

### 1. Clone Repository
```bash
git clone https://github.com/your-repo/chat-app.git](https://github.com/Kusumojakti/chat-apps-test.git
cd chat-apps-test
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
```
Edit file `.env` dan sesuaikan database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=database_username
DB_PASSWORD=database_password
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Migrate Database
```bash
php artisan migrate
```

### 6. Serve the Application
```bash
php artisan serve
```
Aplikasi akan berjalan di `http://127.0.0.1:8000`

## 📜 License
This project is licensed under the MIT License.

