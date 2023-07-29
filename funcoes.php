<?php
function pc_info($computador){
    if(gettype($computador)<>'object'){
        return 'Erro! Valor encontrado: '.gettype($computador).'<br>Valor esperado: object';
    }else{
        $processador = $computador->processador->modelo;
        $clock = $computador->processador->clock;
        $nucleos = $computador->processador->nucleos;
        $ramCanal1 = $computador->ramCanal1->capacidade;
        $ramCanal2 = $computador->ramCanal2->capacidade;
        $ramTipo = $computador->ramCanal1->tipo;
        $armazenamento1 =$computador->armazenamento1->capacidade;
        $armazenamento1Tipo = get_class($computador->armazenamento1->capacidade);
        $armazenamento2 =$computador->armazenamento1->capacidade;
        $armazenamento2Tipo = get_class($computador->armazenamento1->capacidade);

        if($processador<>NULL){
            ?>
            <p><strong>Processador:</strong><?php echo $processador ?></p>
            <p><strong>Clock:</strong><?php echo $clock ?></p>
            <p><strong>Núcleos:</strong><?php echo $nucleos ?></p>
            <?php
            if($ramCanal1<>NULL&&$ramCanal2<>NULL){
                if($ramCanal1==$ramCanal2){
                    ?>
                    <p><strong>Memoria:</strong><?php echo $ramCanal1 ?></p>
                    <?php
                }
            }
        }
    }
}