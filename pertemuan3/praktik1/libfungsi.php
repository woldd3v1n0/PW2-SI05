<?php

    function winRate($menang, $kalah){
          $total = $menang + $kalah;
          $wr = $menang / $total;

          return $wr;
    }

    function cekTier($wr){
        if($wr >= 0.7) {
            return 'Myhtic';
        }elseif($wr >= 0.45){
            return 'Legend';
        }elseif($wr >= 0.2){
            return 'Epic';
        }elseif($wr >= 0.1){
            return 'Master';
        }
    }

    function predikat($wr){
        switch (cekTier($wr)) {
            case 'Myhtic' :
            return 'sangat memuaskan' ;
            break;
            case 'Legend' :
            return 'memuaskan' ;
            break;
            case 'Epic' :
            return 'cukup' ;
            break;
            case 'Mster' :
            return 'beban' ;
            break;
        }
    }
?>