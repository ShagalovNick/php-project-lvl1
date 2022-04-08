<?php

namespace Brain\Games\Game;

// require_once __DIR__ . '/../vendor/autoload.php';

use Brain\Games\Cli;
use Brain\Games\Even;

function runGame($funcIsCorrect, $funcGetTask, $rule, $name)
{
    $correct = 0;
    $uncorrect = 0;
    Cli\ruleAsk($rule);
    while ($correct < 3 && $uncorrect < 1) {
        $a = $funcGetTask();
        $answer = Cli\askQuestion($a);
        [$correct, $uncorrect] = $funcIsCorrect($a, $answer, $correct, $uncorrect, $name);
    }
    if ($correct === 3) {
        Cli\sayGrac($name);
    }
}
