# Laravel Log Queue

Laravel 5 package to push Queued jobs to the log file, 
primary use case for this is in development when jobs should 
not be executed but is saved for debug purposes

## Install

Require this package with composer using the following command:

```bash
composer require hmazter/laravel-log-queue
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
Hmazter\LaravelLogQueue\LogQueueServiceProvider::class,
```

Add necesary config options to your `config/queue.php` and optionaly set `log` as default driver

```php
'log' => [
    'driver' => 'log'
]
```
