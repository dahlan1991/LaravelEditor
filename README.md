# LaravelEditor
---

## 🧐 What Is LaravelEditor?
**LaravelEditor** is a Laravel project that seamlessly integrates the Gutenberg editor. Based on Laraberg, this project provides all the necessary communication and data to ensure the editor functions optimally within a Laravel environment, making text management and editing more intuitive.


---


## ⚙️ Installation

### 1️⃣ Clone Repository
```sh
git clone https://github.com/dahlan1991/LaravelEditor.git
cd laraveleditor
```

### 2️⃣ Environment Configuration
```sh
cp .env.example .env
```
Edit the .env file to customize the database connection.

### 3️⃣ Install Dependencies
```sh
composer install
npm install
```

### 4️⃣ Generate Key & Database Migration
```sh
php artisan key:generate
php artisan migrate --seed
```

### 5️⃣ Running the Server
```sh
php artisan serve
# using mix for css development
"dev": "npm run development",
"development": "mix",
"watch": "mix watch",
"watch-poll": "mix watch -- --watch-options-poll=1000",
"hot": "mix watch --hot",
"prod": "npm run production",
"production": "mix --production" # for production
```

### 📜 Lisensi
The project uses an MIT license or as selected.
