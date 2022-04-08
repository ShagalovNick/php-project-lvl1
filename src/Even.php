<?php

namespace Brain\Games\Even;

use Brain\Games\Cli;
use Brain\Games\Game;

function isEven($name)
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $funcIsCorrect = "\Brain\Games\Even\isCorrect";
    $funcGetTask = "\Brain\Games\Even\getTask";
    Game\runGame($funcIsCorrect, $funcGetTask, $rule, $name);
}

function isCorrect($a, $answer, $correct, $uncorrect, $name)
{
    if (($a % 2 === 0 && $answer === 'yes') || ($a % 2 !== 0 && $answer === 'no')) {
        Cli\sayCorrect();
        $correct += 1;
    } else {
        ($a % 2 !== 0) ? $rightanswer = 'no' : $rightanswer = 'yes';
        Cli\sayWrong($answer, $rightanswer, $name);
        $uncorrect += 1;
    }
    return [$correct, $uncorrect];
}

function getTask()
{
    return rand(1, 99);
}
