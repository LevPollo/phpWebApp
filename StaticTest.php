<?php

class StaticTest
{
    public static string $str = "str";

    public static function foo(){
       echo self::$str;
    }
}

echo StaticTest::$str.PHP_EOL;
StaticTest::foo();
