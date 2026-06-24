# Deployment Guide - Mirror Age Concepts Portfolio

This guide outlines the steps to deploy the modernized portfolio website on **https://portfolio.mirrorageconcepts.com** (Apache production environment).

---

## Prerequisites
1. **PHP**: Version `8.1` or higher, with `pdo_mysql` and `json` extensions enabled.
2. **Composer**: Dependency manager installed globally.
3. **Database**: MySQL/MariaDB database access.
4. **Git**: Git client installed on the server.

---

## Step-by-Step Deployment

### 1. Clone the Codebase
SSH into your server, navigate to the webroot directory (e.g., `/var/www/portfolio`), and clone your repository:
```bash
git clone https://github.com/Dadagold23/portfolio.git .
```

### 2. Configure Environment Settings
Create your production `.env` file by copying the template:
```bash
cp .env.example .env
```
Open `.env` in a text editor (e.g., `nano .env`) and set your production values:
* Set `APP_ENV=production`
* Fill in your production `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, and `DB_PASS`.
* Set your `GEMINI_API_KEY` (if using the AI assistant).

### 3. Install PHP Dependencies
Run Composer with production optimization flags to download dependencies and generate the class autoloader:
```bash
composer install --no-dev --optimize-autoloader
```

### 4. Initialize Database
Import the SQL schema to create the contacts table:
* Using command line:
  ```bash
  mysql -u your_db_user -p your_db_name < database/schema.sql
  ```
* Alternatively, open **phpMyAdmin**, select your database, click **Import**, and choose the `database/schema.sql` file.

### 5. Verify Server Configurations
* **Document Root**: Ensure your domain/subdomain `portfolio.mirrorageconcepts.com` is configured to point directly to the project root directory.
* **Security (`.htaccess`)**: The included `.htaccess` file is pre-configured to:
  * Block public browser access to `.env`, `.git`, `composer.json`, `composer.lock`, and `database/schema.sql`.
  * Prevent directory index browsing.
* **Folder Permissions**: Make sure the server's web user (e.g., `www-data` or `nobody`) has read and write permissions to the project directory, particularly for the root folder if the PHP app needs to write lock/session files (if configured).
