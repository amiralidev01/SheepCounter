<?php

include "Sheep.php";


$sheep1 = new Sheep();
$sheep2 = new Sheep();
$sheep3 = new Sheep();
$sheep4 = new Sheep();

echo $sheep4->getCount();
echo PHP_EOL . "+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++" . PHP_EOL;


for ($i = 0; $i < rand(1, 200); $i++) {
    $sheeps = new Sheep();
    $sheeps->baaa() . PHP_EOL;
}
echo $sheeps->getCount();
