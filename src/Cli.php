<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function hello()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function ruleLine ()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

function askQuestion($a)
{
    line("Question: {$a}");
    return prompt('Your answer');
}

function sayCorrect()
{
    line('Correct!');
}

function sayWrong($answer, $rightanswer, $name)
{
    line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightanswer}'");
    line("Let's try again, {$name}!");
}

function sayGrac($name)
{
    line("Congratulations, {$name}!");
}