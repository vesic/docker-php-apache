<?php

require __DIR__ . '/vendor/autoload.php';

use Utils\Hello;
$faker = Faker\Factory::create();

echo $faker->name;

echo '<br>';
echo Hello::run();
// echo Hello\Hello::run();
// class Util {
//     static function hello() {
//         return 'Hello, world';
//     }
// }

// echo Util::hello();