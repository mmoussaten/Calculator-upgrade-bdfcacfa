<?php

echo ("Welke operatie wil je uitvoeren ?(+,-,%)") . PHP_EOL;
$operator = readline("> ");

if ($operator == "+" || $operator == "-"|| $operator == "%") {
    {
        echo("EERSTE GETAL\n");
        $num1 = readline(">");
        ECHO("TWEEDE GETAL\n");
        $num2 = readline(">");
    }
} else {
    echo "Kies 1 van de 3 operaties" . PHP_EOL;

}
if ($operator == "+") {
    echo "Uw resultaat is" . ($num1 + $num2);
} else if ($operator == "-") {
    echo " Uw resultaat is ". ($num1 - $num2);
}
     else if ($operator == "%") {
    echo " Uw resultaat is ". ($num1 % $num2);
}


