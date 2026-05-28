NumberText
==========

Developer README
----------------
This repository is a PHP library / Zend Framework 2 module that converts numbers into words using language definition files in the Soros format.

The library is organized so a developer can understand it by reading source files and language definitions without needing to run the code.

Project Purpose
---------------
- Convert numeric values into spelled-out text.
- Support many languages through Soros definition files stored in `language/`.
- Provide a Zend filter and view helper for use in ZF2 applications.

What is inside this repository
------------------------------
- `composer.json` - package metadata, dependencies, and PSR-0 autoloading for `NumberText\`.
- `Module.php` - module bootstrap point that loads the source code.
- `config/module.config.php` - ZF2 configuration exposing the view helper `numberText`.
- `src/NumberText/Filter/NumberText.php` - a Zend I18n filter implementation that reads a Soros file and converts values.
- `src/NumberText/Service/Soros.php` - the Soros interpreter and parser. This is the core logic for reading a `.sor` definition and applying rules.
- `src/NumberText/View/Helper/NumberText.php` - a Zend view helper wrapper around the filter.
- `language/*.sor` - language definition files in Soros format. These files define number-to-words rules for each supported locale.

Key Implementation Details
--------------------------
- The filter currently loads a hardcoded file: `language/pt_BR.sor`.
- `Soros.php` parses Soros syntax and uses regular expressions and recursive rule evaluation to transform numeric input into text.
- The view helper constructs the filter and returns the formatted text for templates.

How to read the code
--------------------
1. Start with `src/NumberText/Filter/NumberText.php` to see how the module integrates with Zend's filter system.
2. Read `src/NumberText/Service/Soros.php` next to understand the rule parsing and execution.
3. Review `src/NumberText/View/Helper/NumberText.php` to see how the helper is exposed to views.
4. Inspect `config/module.config.php` to confirm the helper registration.
5. Browse `language/*.sor` to understand the localization definitions and supported languages.

Contribution guidance
---------------------
If you want to contribute by reading files only, focus on these areas:
- Improve or generalize the language-selection logic in `src/NumberText/Filter/NumberText.php`.
- Add tests or documentation for new languages by comparing existing `.sor` files.
- Refactor `src/NumberText/Service/Soros.php` for readability, while preserving Soros parsing behavior.
- Update `config/module.config.php` if the module should expose additional services or helpers.

Notes for reviewers
-------------------
- This project is built for PHP 5.5+ and Zend Framework 2.
- The library uses PSR-0 autoloading and classmap fallback in `composer.json`.
- No runtime or build commands are required to understand the project structure.
