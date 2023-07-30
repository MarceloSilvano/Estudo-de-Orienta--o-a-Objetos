<?php
include('classes.php');
include('funcoes.php');

$var = 'lets go';
//memorias
$hyperX4 = new memoriaRam('DDR3',4,1600);
$hyperX8 = new memoriaRam('DDR3',8,1600);
$ramKingston4 = new memoriaRam('DDR4',4,2000);
$ramKingston8 = new memoriaRam('DDR4',8,2000);

//armazenamento
$ssd120 = new ssd (500,120);
$ssd240 = new ssd (1000,240);
$ssd500 = new ssd (2000,500);
$ssd1000 = new ssd (1500,1000);
$hd500 = new hd(120,500);
$hd1000 = new hd(110,1000);

//processadores
$i3 = new processador('i3',2.4,4,2,2);
$fx6200 = new processador('FX-6200',3,4,4,4);
$fx6300 = new processador('FX-6300',3.5,8,6,6);
$fx6700 = new processador('FX-6700',4,16,8,8);

//computadores
$pcGamerPobre = new computador($fx6300,$ssd120,$hd1000,$hyperX4,$hyperX4);
$pcGamer = new computador($fx6700,$ssd1000,NULL,$ramKingston8,$ramKingston8);
$pcEscritorio = new computador($i3,$hd500,NULL,$ramKingston8,NULL);
$pcTeste = new computador($i3,NULL,NULL,$hyperX4,NULL);

echo $pcTeste->getArmazenamento();