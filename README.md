# Wardrobe Management System

## Overview
The **Wardrobe Management System** is a web application that allows users to manage their clothing items effectively. Users can add, edit, delete, categorize, and search for wardrobe items. The system is built using:

- **Frontend:** Vue 3
- **Backend:** Laravel 11 (with SQLite database)

## Features
- User authentication (login/register)
- Add, edit, and delete clothing items
- Categorize items (e.g., tops, bottoms, shoes)
- Filter and search functionality
- Responsive and user-friendly UI

---

## Setup Instructions

### Backend (Laravel 11)

#### 1. Clone the Repository
```bash
git clone https://github.com/victoroki/wardrobe-management.git
cd wardrobe-management
```

#### 2. Install Dependencies
```bash
composer install
```

#### 3. Configure Environment
Copy the `.env.example` file and update the database settings:
```bash
cp .env.example .env
```
Edit `.env` to use SQLite:
```
DB_CONNECTION=sqlite
DB_DATABASE=${APP_STORAGE_PATH}/database.sqlite
```
Create the SQLite database file:
```bash
touch database/database.sqlite
```

#### 4. Run Migrations
```bash
php artisan migrate
```

#### 5. Start the Server
```bash
php artisan serve
```

---

### Frontend (Vue 3)

#### 1. Navigate to the Frontend Directory
```bash
cd frontend
```

#### 2. Install Dependencies
```bash
npm install
```

#### 3. Run the Development Server
```bash
npm run dev
```

---

## API Endpoints

### Authentication
- **POST** `/login` - User login
- **POST** `/register` - User registration

### Clothing Items
- **GET** `/api/clothing-items` - Get all clothing items
- **POST** `/api/clothing-items` - Add a new item
- **GET** `/api/clothing-items/{id}` - Get item details
- **PUT** `/api/clothing-items/{id}` - Update an item
- **DELETE** `/api/clothing-items/{id}` - Delete an item

---

## Submission
- Share the GitHub repository link.
- Ensure the README file includes setup instructions.

---

## License
This project is licensed under the MIT License.

