<?php
function calcule(int|float $nb1, string $operator, int|float $nb2): int|float|string
{
    if ($operator == '-') {
        return ($nb1 - $nb2);
    } elseif ($operator == '+') {
        return ($nb1 + $nb2);
    } elseif ($operator == '*') {
        return ($nb1 * $nb2);
    } elseif ($operator == '/') {
        return ($nb1 / $nb2);
    } elseif ($operator == '%') {
        return ($nb1 % $nb2);
    } else {
        return ('Veuillez entrer des valeurs correctes');
    };
};

echo calcule(10, '+', 5);
