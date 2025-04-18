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

namespace SerendipityHQ\Monolog\Formatter\Test;

use Monolog\Level;
use Monolog\LogRecord;
use PHPUnit\Framework\TestCase;
use Safe\DateTimeImmutable;
use SerendipityHQ\Monolog\Formatter\MonologHtmlLineFormatter;

class MonologHtmlLineFormatterTest extends TestCase
{
    public function testFormatDebugLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'debug_channel',
            Level::Debug,
            'Debug message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #cccccc\">[%s] debug_channel.DEBUG: Debug message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatInfoLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'info_channel',
            Level::Info,
            'Info message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #468847\">[%s] info_channel.INFO: Info message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatWarningLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'warning_channel',
            Level::Warning,
            'Warning message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #c09853\">[%s] warning_channel.WARNING: Warning message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatErrorLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'error_channel',
            Level::Error,
            'Error message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #f0ad4e\">[%s] error_channel.ERROR: Error message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatCriticalLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'critical_channel',
            Level::Critical,
            'Critical message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #FF7708\">[%s] critical_channel.CRITICAL: Critical message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatAlertLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'alert_channel',
            Level::Alert,
            'Alert message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #C12A19\">[%s] alert_channel.ALERT: Alert message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatEmergencyLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'emergency_channel',
            Level::Emergency,
            'Emergency message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #000000\">[%s] emergency_channel.EMERGENCY: Emergency message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }

    public function testFormatNoticeLogLevel(): void
    {
        $formatter = new MonologHtmlLineFormatter();
        $dateTime  = new DateTimeImmutable('2025-04-18 09:26:40');
        $record    = new LogRecord(
            $dateTime,
            'notice_channel',
            Level::Notice,
            'Notice message',
            ['dummy' => 'context'],
            ['dummy' => 'extra'],
        );

        $expected  = sprintf("<span style=\"color: #3a87ad\">[%s] notice_channel.NOTICE: Notice message {\"dummy\":\"context\"} {\"dummy\":\"extra\"}\n</span>", $dateTime->format(\DateTimeInterface::ATOM));
        $formatted = $formatter->format($record);

        $this->assertEquals($expected, $formatted);
    }
}
