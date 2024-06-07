<?php
function Bonjour(bool $jour)
{
    if ($jour == true) {
        return 'Bonjour!';
    } else {
        return 'Bonsoir!';
    }
}

echo Bonjour(false);
