
# MVC Framework

A lightweight, extensible MVC framework designed for PHP developers to create structured and maintainable web applications. This framework adheres to the Model-View-Controller (MVC) architectural pattern, promoting a clean separation of concerns.

---

## Table of Contents

1. [Introduction](#introduction)
2. [Features](#features)
3. [Installation](#installation)
4. [Usage](#usage)
5. [File Structure](#file-structure)
6. [Dependencies](#dependencies)
7. [Configuration](#configuration)
8. [Testing](#testing)
9. [Contributors](#contributors)
10. [License](#license)

---

## Introduction

This MVC framework provides developers with a flexible and robust foundation for building PHP applications. Its modular design encourages scalability and ease of maintenance while integrating seamlessly with third-party libraries through Composer.

---

## Features

- **Lightweight Framework**: Minimal overhead and optimized for performance.
- **Separation of Concerns**: Clear separation of application logic, data handling, and presentation layers.
- **Composer Integration**: Leverage Composer for dependency management.
- **Extensible Design**: Easily integrate additional modules or libraries.
- **Built-In Routing**: Simple and intuitive routing system.
- **Customizable Views**: Dynamic rendering with reusable components.

---

## Installation

### Prerequisites

Ensure your environment meets the following requirements:
- **PHP**: Version 7.4 or higher
- **Composer**: Dependency manager for PHP

### Steps

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/MostafaAllam-start/MVC.git
   ```

2. **Navigate to the Project Directory**:
   ```sh
   cd MVC
   ```

3. **Install Dependencies**:
   ```sh
   composer install
   ```

4. **Configure Your Environment**:
   - Duplicate the `.env.example` file and rename it to `.env`.
   - Update the configuration settings (e.g., database credentials).

---

## Usage

### Run the Application

Start the PHP built-in server to test the application locally:
```sh
php -S localhost:8000 -t public
```

Navigate to `http://localhost:8000` in your browser.

---

## File Structure

```plaintext
MVC/
├── app/
│   ├── controllers/    # Handles application logic
│   ├── core/           # Framework core classes (e.g., Router, Database)
│   ├── models/         # Business logic and data interaction
│   ├── views/          # HTML templates and layouts
├── public/             # Publicly accessible files (e.g., index.php, assets)
├── vendor/             # Composer-managed dependencies
├── composer.json       # Composer configuration
├── index.php           # Entry point
├── .htaccess           # Apache server configuration
```

---

## Dependencies

This project uses Composer for dependency management. Key dependencies include:
- `phpoption/phpoption`
- `graham-campbell/result-type`

Run `composer show` for a complete list of dependencies.

---

## Configuration

The application can be configured via the `.env` file. Key settings include:
- **Database Configuration**:
  - `DB_HOST`
  - `DB_NAME`
  - `DB_USER`
  - `DB_PASSWORD`
- **Application Settings**:
  - `APP_ENV`
  - `APP_DEBUG`

---

## Testing

Run the test suite with PHPUnit:
```sh
vendor/bin/phpunit
```

Ensure all tests pass before deploying changes.

---

## Contributors

- [Mostafa Allam](https://github.com/MostafaAllam-start)

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Feedback

We welcome contributions and feedback! Please feel free to fork the repository and submit pull requests.
