<?php

$c = 60;
$v = rand (50, 80);

while ($c >= 0){
    if($v >= 60):?>

    <p style='color:red'>Ati depasit viteza legala 50 km/h!</p>

    <?php endif;?>

    <?php if ($c >= 10 && $c % 5 ==1):?>
    <p>Mergi prudent!</p>
    <?php elseif ($c >=2 && $c <10):?>
    <p style='color:orange'>Va rog sa alimentati!</p>
    <?php elseif($c<=1):?>
    <p style>Trebuie sa ne oprim</p>

    <?php die; endif;?>

    <?php 
    $c = $c-2;

    }
