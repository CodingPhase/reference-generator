# Reference Generator
Reference Generator for Laravel Applications

## Installation

### Step 1: Install Through Composer

```
composer require codingphase/reference-generator
```

### Step 2: Register Service Provider
Add your new provider to the `providers` array of `config/app.php`:
```php
  'providers' => [
      // ...
      CodingPhase\ReferenceGenerator\ReferenceGeneratorServiceProvider::class,
      // ...
  ],
```