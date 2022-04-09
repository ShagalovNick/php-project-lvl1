<?php

namespace Brain\Games\Engine;

use Brain\Games\Cli;
use Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function isCorrect(string $rightAnswer, string $answer, int $correct, int $uncorrect, string $name)
{
    if ($answer === $rightAnswer) {
        line('Correct!');
        $correct += 1;
    } else {
        line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightanswer}'.");
        line("Let's try again, {$name}!");
        $uncorrect += 1;
    }
    return [$correct, $uncorrect];
}

function runGame(string $funcGetTask, string $rule)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $correct = 0;
    $uncorrect = 0;
    line("{$rule}");
    while ($correct < 3 && $uncorrect < 1) {
        [$task, $rightAnswer] = $funcGetTask();
        line("Question: {$task}");
        $answer = prompt('Your answer');
        [$correct, $uncorrect] = isCorrect($rightAnswer, $answer, $correct, $uncorrect, $name);
    }
    if ($correct === 3) {
        line("Congratulations, {$name}!");
    }
}
