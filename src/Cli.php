<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function hi(): void
{
    line('Welcome to the Brain Games!');
}

function hello()
{
    line('Welcome to the Brain Games!');
    echo "May I have your name? ";
    $name = str_replace("\n", "", fgets(STDIN));
    echo "Hello, {$name}!\n";
    //$name = prompt('May I have your name?');
    //line("Hello, %s!", $name);
    return $name;
}

function ruleAsk($rule)
{
    line("{$rule}");
}

function askQuestion($a)
{
    line("Question: {$a}");
    echo "Your answer ";
    return str_replace("\n", "", fgets(STDIN));
    //return prompt('Your answer');
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
