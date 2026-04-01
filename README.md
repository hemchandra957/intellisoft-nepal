# Intellisoft Nepal - Software & IT Solutions

<p align="center">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

## 📌 Project Overview
This is a professional business website for **Intellisoft Nepal**, built with **Laravel 12** and **Filament PHP**. It includes a dynamic service catalog, project portfolio, and a powerful blog system to keep clients engaged.

---

## ✨ Key Features
- **Modern UI:** Built with Tailwind CSS and responsive for all screen sizes.
- **Dynamic Blog:** Fully functional blog with list and detailed views, managed via Filament.
- **Admin Dashboard:** Powerful content management system (CMS) using **Filament PHP**.
- **Portfolio:** Showcase of company projects and specialized services.
- **Contact Integration:** Functional contact form to capture leads directly.

---

## 🛠️ Technology Stack
* **Framework:** Laravel 12.x
* **Admin Panel:** Filament PHP v3
* **Database:** MySQL
* **Styling:** Tailwind CSS (with Typography Plugin)
* **Icons:** FontAwesome 6

---

## 🚀 Installation & Setup

1.  **Clone the project:**
    ```bash
    git clone [https://github.com/your-username/intellisoft-nepal.git](https://github.com/your-username/intellisoft-nepal.git)
    cd intellisoft-nepal
    ```

2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```

3.  **Setup Environment:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *(Note: Update your `.env` with your database credentials)*

4.  **Run Migrations:**
    ```bash
    php artisan migrate
    ```

5.  **Create Storage Link (Important for Blog Images):**
    ```bash
    php artisan storage:link
    ```

6.  **Run the application:**
    ```bash
    php artisan serve
    ```

---

## 📂 Project Structure (Important Views)
- `resources/views/home.blade.php` - Homepage with Hero & Services.
- `resources/views/blogs.blade.php` - Blog listing page.
- `resources/views/blog-details.blade.php` - Single blog post detail view.
- `app/Http/Controllers/PageController.php` - Main logic controller.

---

## 🤝 Contribution
If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## 📄 License
The Intellisoft Nepal website is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---
<p align="center">Developed with ❤️ by <b>Hemuu</b></p>
