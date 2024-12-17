# Admin template Laravel/React

This project is an initial base for SAAS (Software as a Service) systems using Laravel and React.

## About template

- code quality
- commitlint
- precommit configurations
- prepush configurations
- docker services
- github actions
- semantic versioning
- changelog
- pint
- eslint
- prettier
- unit tests (pest)
- unit tests (vitest)
- e2e tests (playwright)
- cache (redis)
- logging (sentry)
- mail
- notifications (reverb)
- auth
- users
- modules
- companies
- roles
- permissions

## Installation

1. Clone the repository

    ```bash
    git clone https://github.com/geekhadev/laravel-admin-template.git
    ```

2. Configure `.env` file

    ```bash
    cp .env.example .env
    ```

3. Install PHP dependencies

    ```bash
    composer install
    ```

4. Install JavaScript dependencies

    ```bash
    npm install
    ```

5. Run migrations

    ```bash
    php artisan migrate
    ```

6. Run seeders (optional)

    ```bash
    php artisan db:seed
    ```

7. Run backend development server

    ```bash
    php artisan serve
    ```

8. Run frontend development server

    ```bash
    npm run dev
    ```

> Note: You can change the database credentials in the `.env` file. And if not have the database, you can create with docker compose.

```bash
docker compose up -d
```

## Contributing

Thank you for considering contributing to the template! The contribution guide can be found in the [Contributing document](./CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](./CODE_OF_CONDUCT.md).

## License

The template is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
