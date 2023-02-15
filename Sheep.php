<?php


class Sheep
{
    private $name;
    // private $count;
    private static $count;

    public function __construct()
    {
        $this->name = "Sheep-" . rand(100, 999);
        // $this->count++;
        self::$count++;
    }

    public function baaa()
    {
        echo "$this->name : Ba" . str_repeat("a", rand(1, 10)) . PHP_EOL;
    }

    public function getCount()
    {
        // return $this->count;
        return self::$count;
    }
}
# Test is OK
// $sheep1 = new Sheep();

// echo $sheep1->baaa();
