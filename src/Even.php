<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function isEven($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $correct = 0;
    while ($correct < 3) { 
        $a = rand(1, 99);
        line("Question: {$a}");
        $answer = prompt('Your answer');
        if (($a % 2 === 0 && $answer === 'yes') || ($a % 2 !== 0 && $answer === 'no')) {
            line('Correct!');
            $correct += 1;
            
        } else {
            ($a % 2 !== 0) ? $rightanswer = 'no' : $rightanswer = 'yes';
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightanswer}'");
            line("Let's try again, Bill!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}


