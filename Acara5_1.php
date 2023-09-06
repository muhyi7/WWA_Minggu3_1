<?php
function search($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2;
    }
}

$bilangan1 = 25;
$bilangan2 = 15;
$terbesar = search($bilangan1, $bilangan2);
echo "Bilangan terbesar antara $bilangan1 dan $bilangan2 adalah : $terbesar";
?>
