<?php
function occurrences($str, $char)
{
    $i = 0;
    foreach (str_split($str) as $parsedChar) {
        if ($parsedChar == $char) {
            $i++;
        }
    }
    echo $i;
};

occurrences('bonjour', 'o');
