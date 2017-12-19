<?php

namespace Strings;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function TestExo1()
    {
        $string = (string)Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
        $this->assertSame('myString', $string);
    }

    public function testExo2()
    {
        $str = Str::on('my_string')
            ->camelCase()
            ->toString();
        $this->assertSame('myString', $str);

        $string = Str::toCamelCase('My String');
        $this->assertSame('myString', $str);
    }

    public function TestExo25()
    {
        $str = Str::toCamelCase('my_string');
        $this->assertSame('myString', $str);

        $str = Str::toCamelCase('myString');
        $this->assertSame('myString', $str);

        $str = Str::toCamelCase('my-string');
        $this->assertSame('myString', $str);

        $str = Str::toCamelCase('my string');
        $this->assertSame('myString', $str);

        $str = Str::toCamelCase('My String');
        $this->assertSame('myString', $str);
    }
}