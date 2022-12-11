
# AutoComplete - Backend

This project requires `composer` to be installed. Please refer to https://getcomposer.org/doc/00-intro.md.
Also requires `PHP 7.3` or higher.

Built using `Laravel 8` framework.


## Deployment

Copy environment file:

```bash
  cp .env.example .env
```

Install dependencies:

```bash
  composer install
  npm install
  npm run dev
```

Run server:

```bash
  php artisan serve
```

API endpoint:
```bash
http://127.0.0.1:8000/api/books?q=people
```