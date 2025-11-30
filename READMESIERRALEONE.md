# Sierra Leone: Lion Mountains 🇸🇱

A dynamic multi-page website showcasing the culture, history, and tourism of Sierra Leone. This project was developed as a resit assignment to demonstrate proficiency in PHP, HTML, CSS, and version control.

## 📖 Project Overview

This website serves as a digital guide to Sierra Leone, known as the "Lion Mountains." It features five distinct pages that cover the country's geography, cultural heritage, traditional cuisine, and tourist attractions.

The project is built using **PHP** to generate dynamic content, handle data structures, and process user input, ensuring a modular and maintainable codebase.

## 📂 Project Structure

The project consists of the following files:

- **`indexsierra.php`**: The homepage. It features a time-based greeting script (Good Morning/Afternoon/Evening) and an introduction to the country's geography.
- **`facts.php`**: A detailed profile of the nation. It uses PHP arrays and loops to display key statistics, administrative regions, and districts dynamically.
- **`culture.php`**: Explores religious harmony and traditional societies. It utilizes a multi-dimensional array to render a gallery of cultural images.
- **`food.php`**: Showcases local cuisine. It lists dishes and descriptions using associative arrays and renders a culinary gallery.
- **`tourism.php`**: A travel guide featuring a working contact form. It includes form handling logic to validate user input (`POST` method) and displays feedback or error messages.
- **`sierraleone.css`**: The main stylesheet ensuring a consistent, responsive design and W3C-compliant styling across all pages.

## 🚀 Features & PHP Implementation

This project meets all assignment requirements by implementing the following PHP concepts:

| Feature | Implementation | File(s) |
| :--- | :--- | :--- |
| **Variables & Strings** | Storing country name, current year for footers, and dynamic page titles. | All Pages |
| **Arrays (Indexed & Associative)** | Storing lists of districts, food dishes, and quick facts. | `facts.php`, `food.php` |
| **Multi-dimensional Arrays** | Managing image data (src, alt, caption) for galleries. | `culture.php`, `food.php` |
| **Loops (`foreach`)** | Iterating through arrays to generate HTML lists and image grids efficiently. | `facts.php`, `culture.php`, `food.php` |
| **Conditional Logic (`if/else`)** | Time-based greeting logic; Form validation logic. | `indexsierra.php`, `tourism.php` |
| **Form Handling** | Processing user input via `$_POST` to display personalized messages. | `tourism.php` |
| **Built-in Functions** | `date()`, `implode()`, `htmlspecialchars()`, `trim()`. | All Pages |

## 🛠️ How to Run This Project

1. **Clone the Repository:**
   ```bash
   git clone <repository-url>
   ```

2. **Server Requirements:**
   - You need a local server environment that supports PHP (e.g., XAMPP, WAMP, MAMP, or LAMP).
   - Alternatively, use the built-in PHP development server.

3. **Running with Built-in PHP Server:**
   - Open your terminal/command prompt.
   - Navigate to the project folder.
   - Run the following command:
     ```bash
     php -S localhost:8000
     ```
   - Open your browser and visit `http://localhost:8000/indexsierra.php`.

## ✅ Assessment Criteria Checklist

- [x] **Minimum 4 Pages:** Includes Home, Facts, Culture, Food, and Tourism (5 pages).
- [x] **PHP Functionality:** Every page uses PHP for dynamic content or logic.
- [x] **Git & GitHub:** Project is version-controlled with meaningful commits.
- [x] **W3C Standards:** HTML/CSS is structured, semantic, and valid.
- [x] **Class Topics:** Covers variables, arrays, loops, forms, and separation of concerns.

## 👤 Author

**Umaru Jah**  
*Exploring Sierra Leone - 2025*