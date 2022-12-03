<?php

declare(strict_types=1);

$rounds = explode(PHP_EOL, file_get_contents(__DIR__.'/02.txt'));

$totalPoints = 0;
foreach ($rounds as $key => $value) {
    $value = explode(' ', $value);
    $totalPointsPartOne += calculateMyPointsPerRoundPartOne($value[0], $value[1]);
    $totalPointsPartTwo += calculateMyPointsPerRoundPartTwo($value[0], $value[1]);
}

// Answer Part One
echo sprintf('Answer to day 2 part 1 is %s points'.PHP_EOL, $totalPointsPartOne);

//Answer Part Two
echo sprintf('Answer to day 2 part 2 is %s points'.PHP_EOL, $totalPointsPartTwo);

function calculateMyPointsPerRoundPartOne(string $opponentChoice, string $personnalChoice): int
{
    if ($opponentChoice === 'A' & $personnalChoice === 'X')
        return 4;
    elseif ($opponentChoice === 'A' & $personnalChoice === 'Y')
        return 8;
    elseif ($opponentChoice === 'A' & $personnalChoice === 'Z')
        return 3;
    elseif ($opponentChoice === 'B' & $personnalChoice === 'X')
        return 1;
    elseif ($opponentChoice === 'B' & $personnalChoice === 'Y')
        return 5;
    elseif ($opponentChoice === 'B' & $personnalChoice === 'Z')
        return 9;
    elseif ($opponentChoice === 'C' & $personnalChoice === 'X')
        return 7;
    elseif ($opponentChoice === 'C' & $personnalChoice === 'Y')
        return 2;
    elseif ($opponentChoice === 'C' & $personnalChoice === 'Z')
        return 6;
}


function calculateMyPointsPerRoundPartTwo(string $opponentChoice, string $personnalChoice): int
{
    if ($opponentChoice === 'A' & $personnalChoice === 'X')
        return 3;
    elseif ($opponentChoice === 'A' & $personnalChoice === 'Y')
        return 4;
    elseif ($opponentChoice === 'A' & $personnalChoice === 'Z')
        return 8;
    elseif ($opponentChoice === 'B' & $personnalChoice === 'X')
        return 1;
    elseif ($opponentChoice === 'B' & $personnalChoice === 'Y')
        return 5;
    elseif ($opponentChoice === 'B' & $personnalChoice === 'Z')
        return 9;
    elseif ($opponentChoice === 'C' & $personnalChoice === 'X')
        return 2;
    elseif ($opponentChoice === 'C' & $personnalChoice === 'Y')
        return 6;
    elseif ($opponentChoice === 'C' & $personnalChoice === 'Z')
        return 7;
}