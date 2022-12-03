<?php

declare(strict_types=1);

$elves = explode(PHP_EOL.PHP_EOL, file_get_contents(__DIR__.'/01.txt'));

foreach ($elves as $key => $value) {
    $caloriesBag = explode(PHP_EOL, $value);
    $caloriesCount = array_sum($caloriesBag);
    $elves[$key] = $caloriesCount;
}

rsort($elves);

// Answer Part One
echo sprintf('Answer to day 1 part 1 is %s calories'.PHP_EOL, $elves[0]);

//Answer Part Two
echo sprintf('Answer to day 1 part 2 is %s calories'.PHP_EOL, $elves[0] + $elves[1] + $elves[2]);
