<?php
/**
 *    @author      Aerendir <hello@aerendir.me>
 *    @copyright   Copyright (C) 2016 SerendipityHQ and Aerendir. All rights reserved.
 *    @license     MIT
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
 *
 * @author Adamo Aerendir Crespi <hello@aerendir.me>
 */
class ColorfulHtmlLineFormatter extends LineFormatter
{
    /**
     * Translates Monolog log levels to html color priorities.
     */
    protected $logLevels = array(
        Logger::DEBUG     => '#cccccc',
        Logger::INFO      => '#468847',
        Logger::NOTICE    => '#3a87ad',
        Logger::WARNING   => '#c09853',
        Logger::ERROR     => '#f0ad4e',
        Logger::CRITICAL  => '#FF7708',
        Logger::ALERT     => '#C12A19',
        Logger::EMERGENCY => '#000000',
    );

    /**
     * @param string $dateFormat The format of the timestamp: one supported by DateTime::format
     */
    public function __construct($dateFormat = null)
    {
        parent::__construct($dateFormat);
    }

    /**
     * Formats a log record.
     *
     * @param  array $record A record to format
     * @return mixed The formatted record
     */
    public function format(array $record)
    {
        $output = '<span style="color: ' . $this->logLevels[$record['level']] . '">';
        $output .= parent::format($record);
        return $output.'</span>';
    }
}
