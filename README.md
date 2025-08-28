# SomaliFaker

A comprehensive Laravel package to generate fake Somali data using Faker.

## Installation

You can install the package via composer:

```bash
composer require somali-faker/somali-faker
```

The package will automatically register itself.

## Usage

You can use the new formatters by calling them on the `faker()` helper in Laravel.

### Person

*   `firstName`: Generates a random Somali first name.
*   `lastName`: Generates a random Somali last name.
*   `name`: Generates a random Somali full name.

### Address

*   `city`: Generates a random Somali city.
*   `district`: Generates a random Somali district.
*   `streetName`: Generates a random Somali street name.
*   `address`: Generates a random Somali address.

### Company

*   `company`: Generates a random Somali company name.
*   `companyPrefix`: Generates a random Somali company prefix.
*   `companySuffix`: Generates a random Somali company suffix.

### PhoneNumber

*   `phoneNumber`: Generates a random Somali phone number.

### Internet

*   `email`: Generates a Somali-themed email address.
*   `domainName`: Generates a Somali domain name.

### Text

*   `realText`: Generates a snippet of Somali text.

## Contributing

Contributions are welcome! Please feel free to submit a pull request.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
