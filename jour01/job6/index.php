<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i < 20 && $i > 0) {
        echo ('<em>' . $i . '</em><br>');
    } else if ($i > 25 && $i < 50 && $i !== 42) {
        echo ('<u>' . $i . '</u><br>');
    } else if ($i == 42) {
        echo ('LaPlateforme_<br>');
    } else {
        echo ($i . '<br>');
    }
}
