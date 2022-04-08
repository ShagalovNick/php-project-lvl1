<?php

namespace Brain\Games\Progression;

use Brain\Games\Cli;
use Brain\Games\Engine;

function getProgression($name)
{
    $rule = 'What number is missing in the progression?';
    $funcGetTask = "\Brain\Games\Progression\getTask";
    Engine\runGame($funcGetTask, $rule, $name);
}

function getTask()
{    
    // get progression of 6 elements
    $arrProgression = [];
    $indexProgression = rand(1, 6);
    for ($i = 1; $i < 10; $i++) {
        $arrProgression[] = $i * $indexProgression;
    }

    // get numder of hidden element
    $x = rand(1, 4);

    // get right answer and string task
    $rightAnswer = (string)$arrProgression[$x];
    $arrProgression[$x] = '..';
    $task = implode(" ", $arrProgression);

    return [$task, $rightAnswer];
}