<?php
//estudo de programação orientada a objetos a partir dos personagens, técnicas e transformações do desenho dragon ball
include('personagens.php');
include('tranformacoes.php');
//personagens
$goku = new personagem('Son Goku','Sayajin',175,62,1000,889,892);
$vegeta = new personagem('Vegeta','Sayajin',164,56,990,963,945);
$kuririn = new personagem('Kuririn','Humano',150,45,360,370,355);

//transformações
$goku->transformar('superSayajin');
$vegeta->transformar('superSayajin');
$vegeta->transformar('superSayajin');
var_dump($vegeta->transformacao->ativo);


//niveis de ki
echo $vegeta->kiBase."<br>";
echo $goku->kiBase."<br>";
echo $kuririn->kiBase."<br>";


//batalha de ki
if($goku->kiBase>$vegeta->kiBase){
    echo 'Goku venceu';
}else{
    echo 'Vegeta venceu';
}