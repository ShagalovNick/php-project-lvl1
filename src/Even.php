<?php

namespace Brain\Games\Even;

use Brain\Games\Cli;

function isEven($name)
{
    Cli\ruleLine();
    $correct = 0;
    while ($correct < 3) { 
        $a = rand(1, 99);
        $answer = Cli\askQuestion($a);
        if (($a % 2 === 0 && $answer === 'yes') || ($a % 2 !== 0 && $answer === 'no')) {
            Cli\sayCorrect();
            $correct += 1;            
        } else {
            ($a % 2 !== 0) ? $rightanswer = 'no' : $rightanswer = 'yes';
            Cli\sayWrong($answer, $rightanswer, $name);
            return;
        }
    }
    Cli\sayGrac($name);
}


