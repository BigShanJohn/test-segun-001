<?php

declare(strict_types=1);

use App\Core\Formatter;
use PHPUnit\Framework\TestCase;

final class FormatterTest extends TestCase
{
    public function testToCamelCase(): void
    {
        $formatter = new Formatter();
        $this->assertEquals($formatter->toCamelCase('server_url'), 'serverUrl');
    }
}
