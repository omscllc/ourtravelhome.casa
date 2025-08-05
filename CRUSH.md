# OurTravelHome.Casa Developer Onboarding

This document provides conventions and commands for working with the OurTravelHome.Casa codebase.

## Tooling

This is a Drupal 11 project. The following tools are used:

- **Dependency Management**: [Composer](https://getcomposer.org/)
- **Command Line**: [Drush](https://www.drush.org/)
- **Linting**: [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) with Drupal standards.
- **Static Analysis**: [PHPStan](https://phpstan.org/) with drupal-phpstan.
- **Testing**: [PHPUnit](https://phpunit.de/)

## Commands

- **Install Dependencies**: `composer install`
- **Run project locally**: `vendor/bin/drush uli` (one-time login link)
- **Linting**: `vendor/bin/phpcs --standard=Drupal web/themes/custom/oth`
- **Static Analysis**: `vendor/bin/phpstan analyse web/themes/custom/oth`
- **Run all tests**: `vendor/bin/phpunit -c web/core/phpunit.xml.dist`
- **Run a single test file**: `vendor/bin/phpunit -c web/core/phpunit.xml.dist web/modules/custom/MY_MODULE/tests/src/Unit/MyTest.php`

### Asset Compilation

The theme uses SCSS for styling and modern JavaScript. To compile these assets, you need to have Node.js and npm installed.

- **Install Node Dependencies**: `npm install`
- **Compile Assets**: `npm run build`
- **Watch for Changes**: `npm run watch`

## Code Style

- **PHP**: Follows [Drupal coding standards](https://www.drupal.org/docs/develop/standards/php/php-coding-standards).
- **Twig**: Follows [Drupal Twig standards](https://www.drupal.org/docs/develop/standards/twig/twig-coding-standards).
- **JavaScript**: Follows [Drupal JavaScript standards](https://www.drupal.org/docs/develop/standards/javascript/javascript-api-overview-and-coding-standards).
- **CSS**: Follows [Drupal CSS standards](https://www.drupal.org/docs/develop/standards/css/css-coding-standards).
- **Naming Conventions**: Use camelCase for variables and functions, and PascalCase for classes.
- **Imports**: Group imports by type (classes, functions, constants) and sort them alphabetically.
- **Error Handling**: Use exceptions for error handling.
- **Types**: Use strict typing wherever possible.
- **Comments**: Use comments to explain complex logic, not to describe what the code does.

Follow Drupal best practices for theme and module development. All custom code should be placed in `web/themes/custom` or `web/modules/custom`.
