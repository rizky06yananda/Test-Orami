# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Test-Orami
cara jalankan project
1. ganti .env.example ke .env
2. ganti config .env dengan
    APP_NAME=Lumen
    APP_ENV=local
    APP_KEY=iBVIQ537SBVSdufpLT9CmVcqpmjGL80z
    APP_DEBUG=true
    APP_URL=http://localhost
    APP_TIMEZONE=UTC

    LOG_CHANNEL=stack
    LOG_SLACK_WEBHOOK_URL=

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_test_orami
    DB_USERNAME=root
    DB_PASSWORD=

    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
3. jalankan perintah php artisan migrate
4. jalankan perintah php artisan db:seed atau dengan php artisan db:seed --class=ProduckSeeder dan php artisan db:seed --class=StockSeeder dan php artisan db:seed --class=LocationSeeder
5. jalankan perintah php artisan serve
6. buka url berikut  di postman atau web browser http://127.0.0.1:8000/test
7. bisa akses link berikut untuk test postman https://www.getpostman.com/collections/2e59fa0d9a31007dc6a2

# Result

{
    "result": [
        {
            "produckName": "Product 1000",
            "stock": {
                "total": 29,
                "detail": [
                    {
                        "locationName": "Location 1",
                        "stock": 21
                    },
                    {
                        "locationName": "Location 2",
                        "stock": 8
                    }
                ]
            }
        },
        {
            "produckName": "Product 1001",
            "stock": {
                "total": 14,
                "detail": [
                    {
                        "locationName": "Location 1",
                        "stock": 4
                    },
                    {
                        "locationName": "Location 2",
                        "stock": 10
                    }
                ]
            }
        }
    ]
}

