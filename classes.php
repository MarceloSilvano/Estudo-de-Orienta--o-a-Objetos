<?php

class memoriaRam {
    // propriedades
    public $tipo;
    public $capacidade;
    public $frequencia;

    //construção
    function __construct($tipo,$capacidade,$frequencia)
    {
        $this->tipo = $tipo;
        $this->capacidade = $capacidade;
        $this->frequencia = $frequencia;
    }
}

class processador {
    public $modelo;
    public $clock;
    public $cache;
    public $nucleos;
    public $threads;

    function __construct($modelo,$clock,$cache,$nucleos,$threads)
    {
        $this->modelo = $modelo;
        $this->clock = $clock;
        $this->cache = $cache;
        $this->nucleos = $nucleos;
        $this-> threads = $threads;
    }
}

class ssd{
    public $velocidade;
    public $capacidade;

    function __construct($velocidade,$capacidade)
    {
        $this->velocidade = $velocidade;
        $this->capacidade = $capacidade;
    }
}

class hd{
    public $velocidade;
    public $capacidade;

    function __construct($velocidade,$capacidade)
    {
        $this->velocidade = $velocidade;
        $this->capacidade = $capacidade;
    }
}

class computador {
    public $processador;
    public $armazenamento1;
    public $armazenamento2;
    public $ramCanal1;
    public $ramCanal2;

    function __construct($processador,$armazenamento1,$armazenamento2,$ramCanal1,$ramCanal2)
    {
        $this->processador = $processador;
        $this->armazenamento1 = $armazenamento1;
        $this->armazenamento2 = $armazenamento2;
        $this->ramCanal1 = $ramCanal1;
        $this->ramCanal2 = $ramCanal2;
    }

    public function getMemoria(){
        if(isset($this->ramCanal1->capacidade)&&isset($this->ramCanal2->capacidade)){
            return $this->ramCanal1->capacidade+$this->ramCanal2->capacidade;
        }elseif(isset($this->ramCanal1->capacidade)){
            return $this->ramCanal1->capacidade;
        }elseif(isset($this->ramCanal2->capacidade)){
            return $this->ramCanal2->capacidade;
        }else{
            return 'Sem memória';
        }
    }

    public function getProcessador(){
        if(isset($this->processador)){
            return $this->processador->clock;
        }else{
            return 'Sem processador';
        }
    }
}


?>