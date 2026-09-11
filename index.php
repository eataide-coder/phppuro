<?php
$teste = [];
$teste1 = 123;
$teste3 = 2345;

$arr = array('um', 'dois', 'três', 'quatro', 'pare', 'cinco');
foreach ($arr as $val) {
    if ($val == 'três') {
        break;    /* Pode-se também usar 'break 1;' aqui. */
    }
    echo "$val\n";
}
