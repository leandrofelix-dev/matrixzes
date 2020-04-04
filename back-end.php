<?php
    date_default_timezone_set('America/Fortaleza');
    $hora_atual = date('H');
    $minuto_atual = date('i');
        
        if($hora_atual >= 6 && $minuto_atual <= 60 && $hora_atual <= 18 && $minuto_atual <= 59){
            $modo = 'light';
            $saudacao = 'bom dia!';
        }
        else{
            $modo = 'dark';
            $saudacao = 'boa noite!';
        }
    
        $min = -4;
        $max = 4;
    
        $dodo1 = rand($min,$max);
        $dodo2 = rand($min,$max);
        $dodo3 = rand($min,$max);
        $dodo4 = rand($min,$max);
        $dodo5 = rand($min,$max);
        $dodo6 = rand($min,$max);
        $dodo7 = rand($min,$max);
        $dodo8 = rand($min,$max);
        $dodo9 = rand($min,$max);
        
        $m1 = $dodo4 * $dodo8 * $dodo3;
        $m2 = $dodo7 * $dodo2 * $dodo6;
        $m3 = $dodo1 * $dodo5 * $dodo9;
        
        $m4 = $dodo3 * $dodo5 * $dodo7;
        $m5 = $dodo6 * $dodo8 * $dodo1;
        $m6 = $dodo9 * $dodo2 * $dodo4;
        
        if($m4 > 0){
            $m4 = -$m4;
        }
        
        if($m5 > 0){
            $m5 = -$m5;
        }
    
        if($m6 > 0){
            $m6 = -$m6;
        }
        
        $det = $m1+$m2+$m3+$m4+$m5+$m6;
?>
