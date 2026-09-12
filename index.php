<?php
$teste = [];
$teste1 = 123;

$arr = array('um', 'dois', 'três', 'quatro', 'pare', 'cinco');
foreach ($arr as $val) {
    if ($val == 'pare') {
        break;    /* Pode-se também usar 'break 1;' aqui. */
    }
    echo "$val\n";
}
