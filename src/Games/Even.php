<?php

namespace Brain\Games\Even;

use Brain\Games\Cli;
use Brain\Games\Engine;

function isEven()
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $funcGetTask = "\Brain\Games\Even\getTask";
    // $name = Cli\hello();
    Engine\runGame($funcGetTask, $rule);
}

function getTask()
{
    $task = rand(1, 99);
    if ($task % 2 === 0) {
        $rightAnswer = 'yes';
    } else {
        $rightAnswer = 'no';
    }
        return [$task, $rightAnswer];
}
