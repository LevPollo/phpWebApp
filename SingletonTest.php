<?php

class SingletonTest
{
    private static $instance = null;
    private function __construct(){}

    public function __wakeup(): void
    {
        throw new Exception ('Error');
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)){
            self::$instance == new self();
        }
        return self::$instance;
    }

}

$singletonTest = SingletonTest::getInstance();
$singletonTest2 = SingletonTest::getInstance();
print_r($singletonTest);