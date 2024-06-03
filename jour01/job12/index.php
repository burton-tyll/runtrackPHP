<?php
function calcule($nb1, $operator, $nb2)
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

echo calcule(10, '%', 5);
