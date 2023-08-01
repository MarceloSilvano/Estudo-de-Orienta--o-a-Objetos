<?php
//classe dos personagens
class personagem {
    //atributos (variaveis)
    public $nome;
    public $raca;
    public $altura;
    public $peso;
    public $kiBase;
    public $forca;
    public $velocidade;
    //habilidade (arrays)
    public $tecnicas=[];
    public $transformacao;

    function __construct($nome, $raça, $altura, $peso, $kiBase, $força, $velocidade)
    {
        $this->nome = $nome;
        $this->raca = $raça;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->kiBase = $kiBase;
        $this->forca = $força;
        $this->velocidade = $velocidade;
    }

    function transformar($transformacao){
        $this->transformacao = new $transformacao;
        if($this->transformacao->raca<>$this->raca){
            return "não pode se transformar";
            $this->transformacao=null;
        }elseif($this->transformacao->ativo<>true){            
            $this->transformacao->ativo = true;
            $this->altura = $this->altura+$this->transformacao->altura;
            $this->peso = $this->peso+$this->transformacao->peso;
            $this->kiBase = $this->kiBase*$this->transformacao->kiBase;
            $this->forca = $this->forca*$this->transformacao->forca;;
            $this->velocidade = $this->velocidade*$this->transformacao->velocidade;;
        }
    }
}

