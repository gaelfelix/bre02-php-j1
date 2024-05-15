<?php
function getFirst(array $numbers) : ? int
{
    if (count($numbers) > 0) {
        return $numbers[0];
    }
        return null;
}

echo getFirst([13, 24, 45])."<br>"; // doit afficher 13
echo getFirst([]) . "-<br>"; // doit afficher null

?>