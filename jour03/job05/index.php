<?php
function occurrences(string $str, string $char): int
{
    $i = 0;
    foreach (str_split($str) as $parsedChar) {
        if ($parsedChar == $char) {
            $i++;
        }
    }
    return $i;
};

echo occurrences('bonjour', 'o');
