#Cat Fact API — HNG Stage 0 Task

## 🚀 About

This project is part of the **HNG Internship track-backend** Stage 0 task.  
It’s a simple Laravel API that returns my profile information along with a random cat fact fetched dynamically from the [Cat Fact API](https://catfact.ninja/fact).

---

## 📍 Endpoint

**GET** `/me`  
**Base URL:** [https://catfact-api-main-ds1bg0.laravel.cloud](https://catfact-api-main-ds1bg0.laravel.cloud)

Example request:  
[https://catfact-api-main-ds1bg0.laravel.cloud/me](https://catfact-api-main-ds1bg0.laravel.cloud/me)

Example response:

```json
{
  "status": "success",
  "user": {
    "email": "bethranjerry@gmail.com",
    "name": "Divine-Bethran Jerry",
    "stack": "PHP/Laravel"
  },
  "timestamp": "2025-10-19T12:34:56Z",
  "fact": "Cats sleep 70% of their lives."
}
Setup Instructions (Run Locally)
Clone this repo:

bash
Copy code
git clone https://github.com/BethranBrian/CatFact_API.git
cd CatFact_API
Install dependencies:

bash
Copy code
composer install
Copy the example environment file:

bash
Copy code
cp .env.example .env
Generate the application key:

bash
Copy code
php artisan key:generate
Start the local server:

bash
Copy code
php artisan serve
The app will run on http://127.0.0.1:8000/me

Dependencies
PHP 8.3+

Laravel 12

Composer


Hosted URL:
https://catfact-api-main-ds1bg0.laravel.cloud/me

✨ What I Learned
How to create and deploy a simple API in Laravel

How to deploy a Laravel app using Laravel Cloud


Divine-Bethran Jerry
bethranjerry@gmail.com
Stack: PHP / Laravel
```
