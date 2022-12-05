<?php

declare(strict_types=1);

$bagsList = explode(PHP_EOL, file_get_contents(__DIR__ . '/03.txt'));

$totalPrioritiesPartOne = 0;
foreach ($bagsList as $bag) {
    $totalPrioritiesPartOne += calculatePriorityOfBag($bag);
}

$totalPrioritiesPartTwo = 0;
$bagsToCompute = [];
while (count($bagsList) > 0) {
    array_push($bagsToCompute, $bagsList[0], $bagsList[1], $bagsList[2]);
    $totalPrioritiesPartTwo += calculateBadgePriority($bagsToCompute);
    $bagsToCompute = [];
    $bagsList = array_slice($bagsList, 3);
}

// Answer Part One
echo sprintf('Answer to day 3 part 1 is %s points'.PHP_EOL, $totalPrioritiesPartOne);

//Answer Part Two
echo sprintf('Answer to day 3 part 2 is %s points'.PHP_EOL, $totalPrioritiesPartTwo);

function calculatePriorityOfBag(string $bag): int
{
    $length = strlen($bag) / 2;
    $firstHalf = substr($bag, 0, -$length);
    $secondHalf = substr($bag, $length);

    foreach (str_split($firstHalf) as $letter1) {
        foreach (str_split($secondHalf) as $letter2) {
            if ($letter1 !== $letter2)
                continue;

            return getPriorityFromLetter($letter1);
        }
    }
}

function calculateBadgePriority(array $bags): int
{
    $firstBag = str_split($bags[0]);
    $secondBag = str_split($bags[1]);
    $thirdBag = str_split($bags[2]);;

    foreach ($firstBag as $letter) {
        if (in_array($letter, $secondBag) && in_array($letter, $thirdBag))
            return getPriorityFromLetter($letter);
    }
}

function getPriorityFromLetter(string $letter)
{
    switch ($letter) {
        case 'a':
            return 1;
        case 'b':
            return 2;
        case 'c':
            return 3;
        case 'd':
            return 4;
        case 'e':
            return 5;
        case 'f':
            return 6;
        case 'g':
            return 7;
        case 'h':
            return 8;
        case 'i':
            return 9;
        case 'j':
            return 10;
        case 'k':
            return 11;
        case 'l':
            return 12;
        case 'm':
            return 13;
        case 'n':
            return 14;
        case 'o':
            return 15;
        case 'p':
            return 16;
        case 'q':
            return 17;
        case 'r':
            return 18;
        case 's':
            return 19;
        case 't':
            return 20;
        case 'u':
            return 21;
        case 'v':
            return 22;
        case 'w':
            return 23;
        case 'x':
            return 24;
        case 'y':
            return 25;
        case 'z':
            return 26;
        case 'A':
            return 27;
        case 'B':
            return 28;
        case 'C':
            return 29;
        case 'D':
            return 30;
        case 'E':
            return 31;
        case 'F':
            return 32;
        case 'G':
            return 33;
        case 'H':
            return 34;
        case 'I':
            return 35;
        case 'J':
            return 36;
        case 'K':
            return 37;
        case 'L':
            return 38;
        case 'M':
            return 39;
        case 'N':
            return 40;
        case 'O':
            return 41;
        case 'P':
            return 42;
        case 'Q':
            return 43;
        case 'R':
            return 44;
        case 'S':
            return 45;
        case 'T':
            return 46;
        case 'U':
            return 47;
        case 'V':
            return 48;
        case 'W':
            return 49;
        case 'X':
            return 50;
        case 'Y':
            return 51;
        case 'Z':
            return 52;
    }
}