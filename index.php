<?php
$teste = [];
$teste1 = 123;

$teste = "master";

$arr = array('um', 'dois', 'três', 'quatro', 'pare', 'cinco');
foreach ($arr as $val) {
    if ($val == 'três') {
        break;    /* Pode-se também usar 'break 1;' aqui. */
    }
    echo "$val\n";
}
