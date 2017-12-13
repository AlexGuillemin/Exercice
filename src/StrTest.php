<?php

namespace Strings;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function TestExo1()
    {
        $string = (string) Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
        $this->assertSame( 'myString', $string);
    }
    public function TestExo2()
    {
        Str::on('my_string')->camelCase()->toString() === 'myString';
        $this->assertSame( 'myString', $string);

    }
}

