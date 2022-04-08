<?php

namespace Brain\Games\Engine;

// require_once __DIR__ . '/../vendor/autoload.php';

use Brain\Games\Cli;
use Brain\Games\Even;

function isCorrect($rightAnswer, $answer, $correct, $uncorrect, $name)
{
    if ($answer === $rightAnswer) {
        Cli\sayCorrect();
        $correct += 1;
    } else {
        Cli\sayWrong($answer, $rightAnswer, $name);
        $uncorrect += 1;
    }
    return [$correct, $uncorrect];
}

function runGame($funcGetTask, $rule, $name)
{
    $correct = 0;
    $uncorrect = 0;
    Cli\ruleAsk($rule);
    while ($correct < 3 && $uncorrect < 1) {
        [$task, $rightAnswer] = $funcGetTask();
        $answer = Cli\askQuestion($task);
        [$correct, $uncorrect] = isCorrect($rightAnswer, $answer, $correct, $uncorrect, $name);
    }
    if ($correct === 3) {
        Cli\sayGrac($name);
    }
}
