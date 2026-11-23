# Diploma Project – GPNashik Co-operative Society

## 📌 Project Overview

The **GPNashik Co-operative Society** is a web-based application developed using PHP and MySQL. It is designed to manage member information, guarantor details, loan records and financial transactions.

The system provides separate login facilities for administrators and members, making it easier to maintain and access member and loan-related information.

## ✨ Features

- **User Registration:** Register members with personal and contact details.
- **User Login:** Secure login interface for registered members.
- **Admin Login:** Separate administrator login and management interface.
- **Member Management:** Maintain member information and records.
- **Guarantor Details:** Store information about member guarantors.
- **Loan Management:** Maintain long-term and short-term loan records.
- **Karja Khatavani:** Manage loan installments, interest, contributions and outstanding balances.
- **Financial Records:** Display and maintain member-wise financial information.
- **Session Management:** Manage user and administrator login sessions.

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| PHP | Backend development |
| MySQL | Database management |
| HTML5 | Web page structure |
| CSS3 | Styling and layout |
| JavaScript | Client-side interactions |
| Bootstrap | UI styling (where used) |
| Font Awesome | Icons |

## 📂 Project Structure

```text
Diploma-Project/
│
├── css/
│   ├── admin.css
│   ├── user.css
│   └── style_table.css
│
├── img/
│   └── Images and icons
│
├── html_files/
│   └── HTML pages
│
├── webfonts/
│   └── Font files
│
├── aboutUS.php
├── Account_create.php
├── admin.php
├── admin_logout.php
├── config.example.php
├── display_main_page.php
├── forgot-password.php
├── User.php
├── user_admin.php
├── table.php
├── mainLIst.php
├── project.sql
│
├── .gitignore
└── README.md
```

## ⚙️ Installation and Setup

### 1. Install Requirements

Install the following software:

- XAMPP
- PHP
- MySQL
- Visual Studio Code
- Web Browser

### 2. Clone the Repository

```bash
git clone https://github.com/harshu-32026/Diploma-Project.git
```

### 3. Move Project to XAMPP

Copy the project folder into:

```text
C:\xampp\htdocs\
```

### 4. Start XAMPP

Open XAMPP Control Panel and start:

- Apache
- MySQL

### 5. Create Database

1. Open `http://localhost/phpmyadmin/`.
2. Create a database named `project`.
3. Import the sanitized `project.sql` database structure.

### 6. Configure Database Connection

Copy `config.example.php` and rename the copy to `config.php`.

Update your database credentials:

```php
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

$con = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
```

Use credentials appropriate for your local MySQL installation.

### 7. Run the Project

Open your browser and visit:

```text
http://localhost/Diploma-Project/
```

## 🗄️ Database

The project uses MySQL for storing and managing application information.

The database includes tables for:

- Admin
- Members / Project
- Loan records (Karja Khatavani)
- Member list (KB List)
- User accounts

## 🎯 Project Objective

The main objective of this project is to simplify member record management and loan accounting through a web-based system, reducing manual record-keeping and making financial information easier to maintain.

## 👩‍💻 Developed As

Diploma Academic Project

## 📄 License

This project is developed for academic and educational purposes.