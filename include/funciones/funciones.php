<?php 
    function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0){
        $dias = array(0 => 'un_dia', 1 => 'pase_2dias', 2 => 'pase_completo');
        $total_boletos = array_combine($dias, $boletos);
        $json = array();

        foreach($total_boletos as $key => $boletos):
            if((int) $boletos > 0):
                $json[$key] = (int) $boletos;
            endif;
        endforeach;

        $camisas = (int) $camisas;
        if($camisas > 0):
            $json['camisas'] = $camisas;
        endif;
        $etiquetas = (int) $etiquetas;
        if($etiquetas > 0):
            $json['etiquetas'] = $etiquetas;
        endif;
        return json_encode($json);
    }
    function eventos_json(&$eventos) {
        $eventos_json = array();
        foreach($eventos as $evento):
            $eventos_json['evento'] [] = $evento;
        endforeach;
        
        return json_encode($eventos_json);
    }
?>