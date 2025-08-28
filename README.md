# SomaliFaker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/abdirazack2/somali-faker.svg?style=flat-square)](https://packagist.org/packages/abdirazack/somali-faker)
[![Total Downloads](https://img.shields.io/packagist/dt/abdirazack2/somali-faker.svg?style=flat-square)](https://packagist.org/packages/abdirazack/somali-faker)

A comprehensive Laravel package to generate fake Somali data using [FakerPHP/Faker](https://github.com/FakerPHP/Faker).

This package provides a custom Faker provider for the Somali language (`so_SO`), which can be used to generate Somali-specific data like names, addresses, phone numbers, and more.

## Installation

You can install the package via Composer:

```bash
composer require abdirazack/somali-faker
```

The package will automatically register its service provider.

## Usage

You can use the new formatters by calling them on the `faker()` helper in Laravel or directly on a `Faker\Generator` instance.

Here's a list of the available formatters with examples:

### Person

*   **`firstName()`**: Generates a random Somali first name.
    ```php
    faker()->firstName(); // 'Ayaanle'
    ```

*   **`lastName()`**: Generates a random Somali last name.
    ```php
    faker()->lastName(); // 'Hassan'
    ```
    > **Note:** Both `firstName()` and `lastName()` use the same list of names, so you might get the same name for both.

*   **`name()`**: Generates a random Somali full name.
    ```php
    faker()->name(); // 'Ayaanle Hassan'
    ```

### Address

*   **`city()`**: Generates a random Somali city.
    ```php
    faker()->city(); // 'Mogadishu'
    ```

*   **`district()`**: Generates a random Somali district.
    ```php
    faker()->district(); // 'Hodan District'
    ```

*   **`streetName()`**: Generates a random Somali street name.
    ```php
    faker()->streetName(); // 'Wadada Xamar'
    ```

*   **`address()`**: Generates a random Somali address.
    ```php
    faker()->address(); // '123 Wadada Xamar, Hodan District, Mogadishu'
    ```

### Company

*   **`company()`**: Generates a random Somali company name.
    ```php
    faker()->company(); // 'Hormuud Telecom'
    ```

*   **`companyPrefix()`**: Generates a random Somali company prefix.
    ```php
    faker()->companyPrefix(); // 'Shirkadda'
    ```

*   **`companySuffix()`**: Generates a random Somali company suffix.
    ```php
    faker()->companySuffix(); // 'Group'
    ```

### PhoneNumber

*   **`phoneNumber()`**: Generates a random Somali phone number.
    ```php
    faker()->phoneNumber(); // '+252 61 123 4567'
    ```

### Internet

*   **`email()`**: Generates a Somali-themed email address.
    ```php
    faker()->email(); // 'ayaanle.hassan@example.com'
    ```

*   **`domainName()`**: Generates a Somali domain name.
    ```php
    faker()->domainName(); // 'somalinet.so'
    ```

### Text

*   **`realText()`**: Generates a snippet of Somali text.
    ```php
    faker()->realText(); // 'Soomaalidu been waa sheegtaa, been kuma maahmaahdo...'
    ```

## Usage Outside of Laravel

You can also use this provider in a non-Laravel project by adding the provider to your Faker instance manually:

```php
use Faker\Factory;
use SomaliFaker\Provider\so_SO\Person;
use SomaliFaker\Provider\so_SO\Address;
use SomaliFaker\Provider\so_SO\Company;
use SomaliFaker\Provider\so_SO\PhoneNumber;
use SomaliFaker\Provider\so_SO\Internet;
use SomaliFaker\Provider\so_SO\Text;

$faker = Factory::create();
$faker->addProvider(new Person($faker));
$faker->addProvider(new Address($faker));
$faker->addProvider(new Company($faker));
$faker->addProvider(new PhoneNumber($faker));
$faker->addProvider(new Internet($faker));
$faker->addProvider(new Text($faker));

echo $faker->name; // 'Ayaanle Hassan'
```

## Contributing

Contributions are welcome! Please feel free to submit a pull request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
