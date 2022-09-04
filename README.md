<p align="center"><a href="https://laravel-myanmar-tools.com" target="_blank"><img src="https://raw.githubusercontent.com/PyaeSoneAungRgn/laravel-myanmar-tools/main/docs/assets/images/logo.png" width="200"></a></p>

# Laravel Myanmar Tools

[![Run tests](https://github.com/PyaeSoneAungRgn/laravel-myanmar-tools/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/PyaeSoneAungRgn/laravel-myanmar-tools/actions/workflows/run-tests.yml)

A package for Myanmar tools which extend Laravel’s core.

## Table of Contents

- [Installation](#installation)
- [Version Compatibilities](#version-compatibilities)
- [Documentation](#documentation)
- [Testing](#testing)
- [Version History](#version-history)
- [Credits](#credits)

## Installation

```bash
composer require pyaesoneaung/laravel-myanmar-tools
```

## Version Compatibilities

| Laravel Myanmar Tools |    Laravel 9.\*    |    Laravel 8.\*    |    Laravel 7.\*    |    Laravel 6.\*    |
| --------------------- | :----------------: | :----------------: | :----------------: | :----------------: |
| 2.x                   | :white_check_mark: | :white_check_mark: | :white_check_mark: | :white_check_mark: |
| 1.x                   | :white_check_mark: |        :x:         |        :x:         |        :x:         |

## Documentation

📚 Read the full documentation at [laravel-myanmar-tools.com](https://laravel-myanmar-tools.com)

## Testing

```bash
composer test
```

## Version History

- 2.3.0
  - added nrc macros and validation
- 2.2.1
  - bug fixed publishing translations
- 2.2.0
  - added normalizeMyanmarPhoneNumber request macro
- 2.1.0
  - added normalizeMyanmarPhoneNumber str macro
- 2.0.0
  - support laravel 9.\* | 8.\* | 7.\* | 6.\* :tada:
- 1.4.1
  - bug fixed collection macros (uniToZg and zgToUni)
- 1.4.0
  - extended phone number validation
- 1.3.0
  - improved collection macros
  - changed request macros usage
- 1.2.0
  - added collection macros
  - improved zawgyi detection
- 1.1.0
  - added request macros
- 1.0.0
  - initial release

## Credits

- [A set of useful Laravel collection macros](https://github.com/spatie/laravel-collection-macros)
- [myanmar-phone-number-php](https://github.com/johnreginald/myanmar-phone-number-php)
- [Myanmar Tools (Zawgyi detection & conversion)](https://github.com/google/myanmar-tools)
- [Rabbit-PHP](https://github.com/Rabbit-Converter/Rabbit-PHP)
- [NRCPrefix](https://github.com/greenlikeorange/NRCPrefix)
