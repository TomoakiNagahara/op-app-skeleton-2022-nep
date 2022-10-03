![icon@48](https://user-images.githubusercontent.com/1668339/72398593-cb0d1900-3786-11ea-863c-418ff8d48f43.png)
The onepiece-framework 2020 - New Enforce Power
===

![PHP-7.0 higher](https://img.shields.io/badge/PHP-7.0_higher-brightgreen)

 Welcome to "onepiece-framework" app "skeleton" 2020 on New Enforce Power.
 The "onepiece-framework" is insanely great!!

# Goals for 2022

 1. CI/CD All modules and units. GitHub Action and Webhooks.
 1. Separated Unit, Module, Layout and JS/CSS directories.

# Indexes

 * <a href="#overview">Overview</a>
 * <a href="#function">Function</a>
 * <a href="#install" >Installation guide</a>
 * <a href="#usage"   >Usage</a>

# <a name="overview">Overview</a>

 1. Microsoft Windows product is not support.
 1. Intuitive URL.
 1. Intuitive routing from URL.
 1. Intuitive config.
 1. Intuitive error handling.
 1. Intuitive help.
 1. Intuitive debugging.
 1. Rolling update.

## About Microsoft Windows

 Support of Windows has one incident.
 It is file path separator character.
 We do not use DIRECTORY_SEPARATOR constant.
 Because to keep the clean source code and easy to readable.
 So use a UNIX-based OS.

 But I think so...,  Not far future, Windows kernel is change to Linux kernel.

# <a name="function">Function</a>

 The "onepiece-framework" has everything.

<div data-i18n="false">

 1. Layout
 1. Template
 1. Database
 1. SQL
 1. ORM
 1. Form
 1. Debug
 1. Selftest
 1. Iceage
 1. Cookie
 1. Session
 1. Security
 1. HTML pass through
 1. g11n, i18n, m17n, l10n
 1. Shell

</div>

# <a name="install">Installation guide</a>

 1. Do download or git clone from github.com.
    1. Git
    1. Download
 1. HTTP Server configuration.
    1. Apache
    1. Nginx
    1. PHP Built-in Server
 1. Access to installation page by your browser.

## Prerequisites

 1. PHP version is 7.0 later.
 1. Document-Root path is "/var/www/html/".
 1. Application-root path is "/var/www/html/app-skeleton-2020-nep/".
 1. Server domain name is "localhost".
 1. Application URL is "http://localhost/app-skeleton-2020-nep/".

## Installation instructions

 1. Do download or git clone from github.com.
    1. Download
       1. Access to https://github.com/onepiece-framework/app-skeleton-2020-nep
       1. Click download button.
       1. Copy "app-skeleton-2020-nep" directory inside to "/var/www/html" directory.
    1. Git clone
       1. `cd /var/www/html` -- This directory is example.
       1. `git clone --recursive https://github.com/onepiece-framework/app-skeleton-2020-nep.git` -- Use recursive option.
 2. HTTP Server configuration
    1. Apache
       - No configuration is required.
    1. Nginx
       - No configuration is required.
    1. PHP Built-in server
       1. ```
          php -S localhost:80 /var/www/html/app-skeleton-2020-nep/app.php
          ```
 3. Access to "http://localhost/app-skeleton-2020-nep" by your browser.

# <a name="usage">Usage</a>

 1. End-Point
 1. Template
 1. Layout
 1. Unit
 1. Config

### End-Point

 Always execute "index.php" file.

### Template

 Put the template file in the "asset/template" directory.
 Can be called from anywhere.

```php
$app->Template('foo/bar/file_name.phtml');
```

### Layout

 Layout builds a sense of unity throughout the site.
 Layout files are in "asset/layout".
 You can switch layout to use.
 The configuration file is "asset/config/layout.php".

### Unit

 You can add features such as Form and Database.

### Config

 Set the behavior of the unit.

```php
$config = Config::Get('unit_name');
$config['foo'] = 'bar';
Config::Set('unit_name', $config);
```

 You can make private settings by adding an underscore to the beginning of the file name.

```sh
cp asset/config/unit_name.php asset/config/_unit_name.php
```
