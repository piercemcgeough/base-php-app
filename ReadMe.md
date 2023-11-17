# Base PHP App
Base App ready to rock with PHPUnit and PSR-4 autoloading.

## Running Tests & Code Standards
To run tests, run the following command

**PHPUnit**
```
vendor/bin/phpunit
```

**PHPStan**
```
vendor/bin/phpstan analyse src --level=9
```

**PHP CS Fixer**
```
vendor/bin/php-cs-fixer fix src --diff
```
