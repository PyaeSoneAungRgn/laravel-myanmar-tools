# Installation

## Install Package

Download package via composer

```bash
composer require pyaesoneaung/laravel-myanmar-tools
```

## Version Compatibilities

| Laravel Myanmar Tools |    Laravel 9.\*    |    Laravel 8.\*    |    Laravel 7.\*    |    Laravel 6.\*    |
| --------------------- | :----------------: | :----------------: | :----------------: | :----------------: |
| 2.x                   | :white_check_mark: | :white_check_mark: | :white_check_mark: | :white_check_mark: |
| 1.x                   | :white_check_mark: |        :x:         |        :x:         |        :x:         |

## Publish Validation Messages (Optional)

If you want to make changes in validation messages, you can publish them to your application.

```bash
php artisan vendor:publish --provider="PyaeSoneAung\LaravelMyanmarTools\LaravelMyanmarToolsServiceProvider"
```

Now, you can edit validation messages at `/lang/vendor/laravelMyanmarTools/en/validation.php`
