<?php

declare(strict_types=1);

/*
 * This file is part of Coommercio.
 *
 * Copyright (c) Adamo Aerendir Crespi <hello@aerendir.me>.
 *
 * This code is to consider private and non disclosable to anyone for whatever reason.
 * Every right on this code is reserved.
 *
 * For the full copyright and license information, please view the LICENSE file that
 * was distributed with this source code.
 */

use DG\BypassFinals;
/*
 * This file is part of Coommercio.
 *
 * Copyright (c) Adamo Aerendir Crespi <hello@aerendir.me>.
 *
 * This code is to consider private and non disclosable to anyone for whatever reason.
 * Every right on this code is reserved.
 *
 * For the full copyright and license information, please view the LICENSE file that
 * was distributed with this source code.
 */

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__) . '/vendor/autoload.php';

if (file_exists(dirname(__DIR__) . '/config/bootstrap.php')) {
    require dirname(__DIR__) . '/config/bootstrap.php';
}
