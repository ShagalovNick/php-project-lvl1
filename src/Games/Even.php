<?php

namespace Brain\Games\Even;

use Brain\Games\Cli;
use Brain\Games\Engine;

function isEven($name)
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $funcGetTask = "\Brain\Games\Even\getTask";
    Engine\runGame($funcGetTask, $rule, $name);
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
