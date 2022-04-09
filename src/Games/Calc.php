<?php

namespace Brain\Games\Calc;

use Brain\Games\Cli;
use Brain\Games\Engine;

function Calculate($name)
{
    $rule = 'What is the result of the expression?';
    $funcGetTask = "\Brain\Games\Calc\getTask";
    $name = Cli\hello();
    Engine\runGame($funcGetTask, $rule, $name);
}

function getTask()
{
    $a = rand(1, 30);
    $b = rand(1, 10);

    // 3 type of tasks
    $i = rand(0, 2);
    if ($i === 0) {
        $task = "{$a} + {$b}";
        $rightAnswer = (string)($a + $b);
    } elseif ($i === 1) {
        $task = "{$a} - {$b}";
        $rightAnswer = (string)($a - $b);
    } else {
        $task = "{$a} * {$b}";
        $rightAnswer = (string)($a * $b);
    }
    return [$task, $rightAnswer];
}
