<?php
for ($i = 0; $i <= 1137; $i++) {
    if ($i !== 26 && $i !== 37 && $i !== 88 && $i !== 1111) {
        echo ($i . '<br>');
    }
}


/*Autre méthode empruntée à chatGPT 

<?php
$excludedValues = [26, 37, 88, 1111];

for ($i = 0; $i <= 1137; $i++) {
    if (!in_array($i, $excludedValues)) {
        echo $i . '<br>';
    }
}
?>


*/