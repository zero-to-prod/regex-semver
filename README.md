# Zerotoprod\RegexSemver

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/regex-semver)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/regex-semver/test.yml?label=test)](https://github.com/zero-to-prod/regex-semver/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/regex-semver/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/regex-semver/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/regex-semver?color=blue)](https://packagist.org/packages/zero-to-prod/regex-semver/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/regex-semver.svg?color=purple)](https://packagist.org/packages/zero-to-prod/regex-semver/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/regex-semver?color=f28d1a)](https://packagist.org/packages/zero-to-prod/regex-semver)
[![License](https://img.shields.io/packagist/l/zero-to-prod/regex-semver?color=pink)](https://github.com/zero-to-prod/regex-semver/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/regex-semver.svg)](https://wakatime.com/badge/github/zero-to-prod/regex-semver)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/regex-semver?branch=main)](https://hitsofcode.com/github/zero-to-prod/regex-semver/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
  - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A regular expression to check a SemVer string.

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\RegexSemver` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/regex-semver
```

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/regex-semver)
vendor/bin/zero-to-prod-regex-semver

# Publish to custom directory
vendor/bin/zero-to-prod-regex-semver /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-regex-semver"
        ],
        "post-update-cmd": [
            "zero-to-prod-regex-semver"
        ]
    }
}
```

## Usage

```php
Zerotoprod\RegexSemver\RegexSemver::pattern;
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/regex-semver/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
