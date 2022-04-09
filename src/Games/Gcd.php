<?php

namespace Brain\Games\Gcd;

use Brain\Games\Cli;
use Brain\Games\Engine;

function getGcd()
{
    $rule = 'Find the greatest common divisor of given numbers.';
    $funcGetTask = "\Brain\Games\Gcd\getTask";
    $name = Cli\hello();
    Engine\runGame($funcGetTask, $rule, $name);
}

function getTask()
{
    $a = rand(1, 12);
    $b = rand(1, 48);
    $c = min($a, $b);
    for ($i = 1; $i <= $c; $i++) {
        if (($a % $i) === 0) {
            if (($b % $i) === 0) {
                $rightAnswer = (string)$i;
            }
        }
    }
    $task = "{$a} {$b}";
    return [$task, $rightAnswer];
}
