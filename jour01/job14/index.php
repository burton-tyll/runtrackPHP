<?php

function leetSpeaking($str)
{
    $leetMapping = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'I' => '1', 'i' => '1',
        'L' => '1', 'l' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $newText = '';
    foreach (str_split($str) as $char) {
        if (array_key_exists($char, $leetMapping)) {
            $newText .= $leetMapping[$char];
        } else {
            $newText .= $char;
        }
    }
    return $newText;
}

echo leetSpeaking('Ce texte est écrit en leetSpeak');
