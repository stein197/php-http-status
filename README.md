[![](https://img.shields.io/github/license/stein197/http-status)](LICENSE)
![](https://img.shields.io/packagist/v/stein197/http-status)

# HTTP status codes enum

## Installation
```
composer require stein197/http-status
```

## Usage:
```php
use Stein197\Http\Status;

Status::NotFound->getCode();    // 404
Status::NotFound->getMessage(); // 'Not Found'
```

## Composer scripts
- `test` Run unit tests
