<?php
//Definição classe geral de dispositivos de armazenamento
class armazenamento{
    public $velocidade; // Propriedade para a velocidade do dispositivo
    public $capacidade; // Propriedade para a capacidade do dispositivo
}

// Definição da classe MemoriaRam
class memoriaRam {
    public $tipo; // Propriedade para o tipo de memória RAM
    public $capacidade; // Propriedade para a capacidade da memória RAM
    public $frequencia; // Propriedade para a frequência da memória RAM

    // Método construtor para inicializar as propriedades da classe
    function __construct($tipo, $capacidade, $frequencia)
    {
        $this->tipo = $tipo;
        $this->capacidade = $capacidade;
        $this->frequencia = $frequencia;
    }
}

// Definição da classe Processador
class processador {
    public $modelo; // Propriedade para o modelo do processador
    public $clock; // Propriedade para a frequência de clock do processador
    public $cache; // Propriedade para o tamanho da cache do processador
    public $nucleos; // Propriedade para o número de núcleos do processador
    public $threads; // Propriedade para o número de threads do processador

    // Método construtor para inicializar as propriedades da classe
    function __construct($modelo, $clock, $cache, $nucleos, $threads)
    {
        $this->modelo = $modelo;
        $this->clock = $clock;
        $this->cache = $cache;
        $this->nucleos = $nucleos;
        $this->threads = $threads;
    }
}

// Definição da classe SSD
class ssd extends armazenamento{
    // Método construtor para inicializar as propriedades da classe
    function __construct($velocidade, $capacidade)
    {
        $this->velocidade = $velocidade;
        $this->capacidade = $capacidade;
    }
}

// Definição da classe HD
class hd extends armazenamento{
    // Método construtor para inicializar as propriedades da classe
    function __construct($velocidade, $capacidade)
    {
        $this->velocidade = $velocidade;
        $this->capacidade = $capacidade;
    }
}

// Definição da classe Computador
class computador {
    public $processador; // Propriedade para armazenar um objeto Processador
    public $armazenamento1; // Propriedade para armazenar um objeto Armazenamento (SSD ou HD)
    public $armazenamento2; // Propriedade para armazenar um segundo objeto Armazenamento (SSD ou HD)
    public $ramCanal1; // Propriedade para armazenar um objeto MemoriaRam para o primeiro canal de RAM
    public $ramCanal2; // Propriedade para armazenar um objeto MemoriaRam para o segundo canal de RAM

    // Método construtor para inicializar as propriedades da classe
    function __construct($processador, $armazenamento1, $armazenamento2, $ramCanal1, $ramCanal2)
    {
        $this->processador = $processador;
        $this->armazenamento1 = $armazenamento1;
        $this->armazenamento2 = $armazenamento2;
        $this->ramCanal1 = $ramCanal1;
        $this->ramCanal2 = $ramCanal2;
    }

    // Método para obter a quantidade total de memória RAM do computador
    public function getMemoria()
    {
        if (isset($this->ramCanal1->capacidade) && isset($this->ramCanal2->capacidade)) {
            return $this->ramCanal1->capacidade + $this->ramCanal2->capacidade;
        } elseif (isset($this->ramCanal1->capacidade)) {
            return $this->ramCanal1->capacidade;
        } elseif (isset($this->ramCanal2->capacidade)) {
            return $this->ramCanal2->capacidade;
        } else {
            return 'Sem memória';
        }
    }

    // Método para obter o modelo do processador do computador
    public function getProcessador()
    {
        if (isset($this->processador)) {
            return $this->processador->modelo;
        } else {
            return 'Sem processador';
        }
    }

    // Método para obter a frequência de clock do processador do computador
    public function getClock()
    {
        if (isset($this->processador)) {
            return $this->processador->clock;
        } else {
            return 'Sem processador';
        }
    }

    // Método para obter informações sobre os dispositivos de armazenamento do computador
    public function getArmazenamento()
    {
        // Verifica se existe um dispositivo de armazenamento no canal 1
        if (isset($this->armazenamento1->capacidade)) {
            $tipo = get_class($this->armazenamento1);
            $arm1 = $this->armazenamento1->capacidade . '(' . $tipo . ')';
        } else {
            $arm1 = '';
        }

        // Verifica se existe um dispositivo de armazenamento no canal 2
        if (isset($this->armazenamento2->capacidade)) {
            $tipo = get_class($this->armazenamento2);
            $arm2 = $this->armazenamento1->capacidade . '(' . $tipo . ')';
        } else {
            $arm2 = '';
        }

        // Switch/case para combinar as informações dos dispositivos de armazenamento
        switch (true) {
            case $arm1 !== '' && $arm2 !== '':
                return $arm1 . ' / ' . $arm2;
            case $arm1 !== '':
                return $arm1;
            case $arm2 !== '':
                return $arm2;
            default:
                return 'Sem armazenamento';
        }
    }
}
