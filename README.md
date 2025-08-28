# SomaliFaker
somali faker composer package

# Detailed Plan for a Somali Faker Laravel Package

This document outlines the detailed, step-by-step plan to create a comprehensive Composer package for Laravel that provides Somali-specific data for Faker, covering multiple data categories.

### Phase 1: Package Scaffolding and Setup

1.  **Create Package Directory Structure:**
    *   Create a `packages/` directory in your project root to build the package locally.
    *   The full directory structure for the new package will be:
        ```
        packages/
        └── somali-faker/
            ├── src/
            │   ├── Provider/
            │   │   └── so_SO/
            │   ├── data/
            │   └── SomaliFakerServiceProvider.php
            └── composer.json
        ```

2.  **Configure `composer.json` for the Package:**
    *   Create the `composer.json` file for the package with the following details:
        *   **name**: `somali-faker/somali-faker`
        *   **description**: `A comprehensive Laravel package to generate fake Somali data using Faker.`
        *   **license**: `MIT`
        *   **require**: `"fakerphp/faker": "^1.9.1"`
        *   **autoload (PSR-4)**: `"SomaliFaker\\": "src/"`
        *   **extra.laravel.providers**: Register `SomaliFaker\\SomaliFakerServiceProvider`.

3.  **Integrate with Main Project for Local Development:**
    *   In the main Laravel project's `composer.json`, add the package to `require` as `"somali-faker/somali-faker": "@dev"`.
    *   Add a `repositories` entry to point to the local path.
    *   Run `composer update` to install the package.

### Phase 2: Data and Provider Implementation

This phase is the core of the package. We will create multiple provider classes, each responsible for a different type of data.

4.  **Populate the `src/data/` directory:**
    *   `names.txt`: A list of Somali first/last names.
    *   `cities.txt`: A list of Somali cities and towns (from `addresses.txt`).
    *   `districts.txt`: A list of Somali districts.
    *   `lorem.txt`: The Somali proverbs and placeholder text.
    *   `company_suffixes.txt`: A list of company suffixes (e.g., "Group of Companies", "Tours & Cargo", "Trading Co.").
    *   `company_prefixes.txt`: A list of company prefixes (e.g., "Shirkadda", "Warshadda").

5.  **Create Provider `src/Provider/so_SO/Person.php`:**
    *   **Class**: `Person extends \Faker\Provider\Base`
    *   **Data**: `protected static $names`
    *   **Methods**:
        *   `firstName()`: Returns a random name from `$names`.
        *   `lastName()`: Returns a random name from `$names`.
        *   `name()`: Returns `firstName() . ' ' . lastName()`.

6.  **Create Provider `src/Provider/so_SO/Address.php`:**
    *   **Class**: `Address extends \Faker\Provider\Base`
    *   **Data**: `protected static $cities`, `protected static $districts`
    *   **Methods**:
        *   `city()`: Returns a random city from `$cities`.
        *   `district()`: Returns a random district from `$districts`.
        *   `streetName()`: Generates a plausible street name, e.g., `"Wadada " . $this->generator->firstName()`.
        *   `address()`: Combines the above into a full address, e.g., `"123 " . $this->streetName() . ", " . $this->district() . ", " . $this->city()`.

7.  **Create Provider `src/Provider/so_SO/Company.php`:**
    *   **Class**: `Company extends \Faker\Provider\Base`
    *   **Data**: `protected static $companySuffixes`, `protected static $companyPrefixes`
    *   **Methods**:
        *   `companySuffix()`: Returns a random suffix like "Group of Companies".
        *   `companyPrefix()`: Returns a random prefix like "Shirkadda".
        *   `company()`: Combines a name and a suffix to create a company name, e.g., `$this->generator->lastName() . ' ' . $this->companySuffix()` or `$this->companyPrefix() . ' ' . $this->generator->lastName()`.

8.  **Create Provider `src/Provider/so_SO/PhoneNumber.php`:**
    *   **Class**: `PhoneNumber extends \Faker\Provider\Base`
    *   **Data**: `protected static $phonePrefixes = ['61', '62', '63', '65', '68', '90'];`
    *   **Methods**:
        *   `phoneNumber()`: Generates a random Somali phone number in the format `+252 [prefix] [xxxxxxx]`. It can use `numerify()` for the random digits. Example: `"+252 " . static::randomElement(static::$phonePrefixes) . " " . $this->generator->numerify('#######')`.

9.  **Create Provider `src/Provider/so_SO/Internet.php`:**
    *   **Class**: `Internet extends \Faker\Provider\Base`
    *   **Methods**:
        *   `email()`: Generates a Somali-themed email address using a random name, e.g., `strtolower($this->generator->firstName()) . '@example.com'`.
        *   `domainName()`: Could combine a name with a common Somali suffix like `.so`.

10. **Create Provider `src/Provider/so_SO/Text.php`:**
    *   **Class**: `Text extends \Faker\Provider\Base`
    *   **Data**: `protected static $lorem`
    *   **Methods**:
        *   `realText($maxNbChars = 200, $indexSize = 2)`: Returns a snippet of Somali text from the `lorem.txt` data.

### Phase 3: Laravel Integration and Documentation

11. **Implement the Service Provider:**
    *   In `SomaliFakerServiceProvider.php`, register all the new providers with Laravel's Faker instance.
    *   **Example `register()` method:**
        ```php
        public function register()
        {
            $this->app->resolving(Generator::class, function (Generator $faker, $app) {
                $faker->addProvider(new \SomaliFaker\Provider\so_SO\Person($faker));
                $faker->addProvider(new \SomaliFaker\Provider\so_SO\Address($faker));
                $faker->addProvider(new \SomaliFaker\Provider\so_SO\Company($faker));
                $faker->addProvider(new \SomaliFaker\Provider\so_SO\PhoneNumber($faker));
                $faker->addProvider(new \SomaliFaker\Provider\so_SO\Internet($faker));
                $faker->addProvider(new \SomaliFaker\Provider\so_SO\Text($faker));
                return $faker;
            });
        }
        ```

12. **Create a `README.md` for the Package:**
    *   Write a high-quality `README.md` file.
    *   It must include installation instructions and a comprehensive list of all the new formatters available (e.g., `firstName`, `city`, `company`, `phoneNumber`).

### Phase 4: Verification and Testing

13. **Manual Testing:**
    *   Use `php artisan tinker` to test each formatter individually, e.g., `fake()->company()`, `fake()->phoneNumber()`.
    *   This ensures all providers are registered and working correctly.

14. **Automated Testing (Recommended):**
    *   Use Orchestra Testbench to create a test suite.
    *   Write tests to confirm that each formatter returns a non-empty string and that the data format is as expected.
