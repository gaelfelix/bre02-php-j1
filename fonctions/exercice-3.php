<?php

function isOdd(int $number) : int
{
    if ($number%2 === 0) {
        return 1;
    }
    else {
        return 0;
    }
}

echo isOdd(12) . "<br>"; // doit afficher 0 ou false
echo isOdd(29) . "<br>"; // doit afficher 1 ou true

?>