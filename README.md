<p align="center">
    <a href="http://www.serendipityhq.com" target="_blank">
        <img style="max-width: 350px" src="http://www.serendipityhq.com/assets/open-source-projects/Logo-SerendipityHQ-Icon-Text-Purple.png">
    </a>
</p>

<h1 align="center">Serendipity HQ Monolog HTML Line Log</h1>
<p align="center">A Monolog Formatter to make log lines colorful depending on their level.</p>
<p align="center">
    <a href="https://github.com/Aerendir/monolog-html-line-formatter/releases"><img src="https://img.shields.io/packagist/v/serendipity_hq/monolog-html-line-formatter.svg?style=flat-square"></a>
    <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square"></a>
    <a href="https://github.com/Aerendir/monolog-html-line-formatter/releases"><img src="https://img.shields.io/packagist/php-v/serendipity_hq/monolog-html-line-formatter?color=%238892BF&style=flat-square&logo=php" /></a>
    <img title="Tested with Monolog ^2.0" src="https://img.shields.io/badge/Symfony-%5E2.0-333?style=flat-square&logo=php" />
</p>

## Current Status

[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=coverage)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=alert_status)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=reliability_rating)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=security_rating)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=sqale_index)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=Aerendir_monolog-html-line-formatter&metric=vulnerabilities)](https://sonarcloud.io/dashboard?id=Aerendir_monolog-html-line-formatter)

[![Phan](https://github.com/Aerendir/monolog-html-line-formatter/workflows/Phan/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)
[![PHPStan](https://github.com/Aerendir/monolog-html-line-formatter/workflows/PHPStan/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)
[![PSalm](https://github.com/Aerendir/monolog-html-line-formatter/workflows/PSalm/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)
[![PHPUnit](https://github.com/Aerendir/monolog-html-line-formatter/workflows/PHPunit/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)
[![Composer](https://github.com/Aerendir/monolog-html-line-formatter/workflows/Composer/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)
[![PHP CS Fixer](https://github.com/Aerendir/monolog-html-line-formatter/workflows/PHP%20CS%20Fixer/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)
[![Rector](https://github.com/Aerendir/monolog-html-line-formatter/workflows/Rector/badge.svg)](https://github.com/Aerendir/monolog-html-line-formatter/actions?query=branch%3Adev)

<hr />
<h3 align="center">
    <b>Do you like this library?</b><br />
    <b><a href="#js-repo-pjax-container">LEAVE A &#9733;</a></b>
</h3>
<p align="center">
    or run<br />
    <code>composer global require symfony/thanks && composer thanks</code><br />
    to say thank you to all libraries you use in your current project, this included!
</p>
<hr />

## Install monolog-html-line-formatter via Composer

    $ composer require serendipity_hq/monolog-html-line-formatter

This library follows the http://semver.org/ versioning conventions.

## How to use Serendipity HQ Monolog HTML Line Formatter

```php
// Crate a Monolog Logger
$logger = new Logger('The name of your Logger');

try {
    $handler = new TheHandlerYouChose($logFile, Logger::DEBUG);
    $handler->setFormatter(new MonologHtmlLineFormatter());
} catch(\Throwable $e) {
    throw $e;
}

// Now add some handlers
$logger->pushHandler($handler);
```

<hr />
<h3 align="center">
    <b>Do you like this library?</b><br />
    <b><a href="#js-repo-pjax-container">LEAVE A &#9733;</a></b>
</h3>
<p align="center">
    or run<br />
    <code>composer global require symfony/thanks && composer thanks</code><br />
    to say thank you to all libraries you use in your current project, this included!
</p>
<hr />
