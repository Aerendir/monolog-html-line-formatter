<?php

declare(strict_types=1);

/*
 * This file is part of the Serendipity HQ Monolog HTML Line Formatter.
 *
 * Copyright (c) Adamo Aerendir Crespi <aerendir@serendipityhq.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;
use SerendipityHQ\Integration\Rector\SerendipityHQ;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->phpVersion(PhpVersion::PHP_83);
    $rectorConfig->paths([__DIR__ . '/src', __DIR__ . '/tests']);
    $rectorConfig->bootstrapFiles([__DIR__ . '/vendor-bin/phpunit/vendor/autoload.php']);
    $rectorConfig->import(SerendipityHQ::SHQ_LIBRARY);

    $toSkip = SerendipityHQ::buildToSkip(SerendipityHQ::SHQ_LIBRARY_SKIP);
    $rectorConfig->skip($toSkip);
};
