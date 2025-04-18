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

namespace SerendipityHQ\Monolog\Formatter;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;

/**
 * Colorizes incoming records to differentiate them accordingly to their level.
 *
 * This is especially useful for html email logging.
 * This Formatter is more compact in visualization than the HtmlFormatter, as it doesn't uses tables that occupy a lot
 * of space in the page making difficult reading logs and find the relevant ones.
 */
final class MonologHtmlLineFormatter extends LineFormatter
{
    /**
     * Translates Monolog log levels to html color priorities.
     *
     * @var string[]
     */
    private const array LOG_LEVELS = [
        \Monolog\Level::Debug->value     => '#cccccc',
        \Monolog\Level::Info->value      => '#468847',
        \Monolog\Level::Notice->value    => '#3a87ad',
        \Monolog\Level::Warning->value   => '#c09853',
        \Monolog\Level::Error->value     => '#f0ad4e',
        \Monolog\Level::Critical->value  => '#FF7708',
        \Monolog\Level::Alert->value     => '#C12A19',
        \Monolog\Level::Emergency->value => '#000000',
    ];

    /**
     * @param string|null $dateFormat The format of the timestamp: one supported by DateTime::format
     */
    public function __construct(?string $dateFormat = null)
    {
        parent::__construct($dateFormat);
    }

    public function format(\Monolog\LogRecord $record): string
    {
        $output = '<span style="color: ' . self::LOG_LEVELS[$record->level->value] . '">';
        $output .= parent::format($record);

        return $output . '</span>';
    }
}
