<?php
    date_default_timezone_set('America/Fortaleza');
    $hora_atual = date('H');
    $minuto_atual = date('i');
        
        if($hora_atual >= 6 && $minuto_atual <= 60 && $hora_atual <= 11 && $minuto_atual <= 59){
            $saudacao = 'bom dia!';
        }elseif($hora_atual >= 12 && $minuto_atual <= 60 && $hora_atual <= 17 && $minuto_atual <= 59){
            $saudacao = 'boa tarde!';
        }else{
            $saudacao = 'boa noite!';
        }

        // GERAR MATRIZ ALEATÓRIA

            $min = -5;
            $max = 5;
        
            $e1 = rand($min,$max);
            $e2 = rand($min,$max);
            $e3 = rand($min,$max);
            $e4 = rand($min,$max);
            $e5 = rand($min,$max);
            $e6 = rand($min,$max);
            $e7 = rand($min,$max);
            $e8 = rand($min,$max);
            $e9 = rand($min,$max);
            
            $m1 = $e4 * $e8 * $e3;
            $m2 = $e7 * $e2 * $e6;
            $m3 = $e1 * $e5 * $e9;
            
            $m4 = $e3 * $e5 * $e7;
            $m5 = $e6 * $e8 * $e1;
            $m6 = $e9 * $e2 * $e4;
            
            $det = $m1+$m2+$m3-$m4-$m5-$m6;
?>
