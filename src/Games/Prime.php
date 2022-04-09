<?php

namespace Brain\Games\Prime;

use Brain\Games\Cli;
use Brain\Games\Engine;

function isPrime($name)
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $funcGetTask = "\Brain\Games\Prime\getTask";
    $name = Cli\hello();
    Engine\runGame($funcGetTask, $rule, $name);
}

function getTask()
{
    $arrTask = [];
    $arrPrimeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
    $task = rand(0, 99);
    in_array($task, $arrPrimeNumbers) ? $rightAnswer = 'yes' : $rightAnswer = 'no';
    return [$task, $rightAnswer];
}
