<?php

   /*
       variable system
       variable built in PHP
   */
    echo $_SERVER["DOCUMENT_ROOT"];

    /*
        Varible User
        Variable yang dibuat oleh user
     */
     echo '<br><br>';

    $name = 'alvi';
    $age = '19';
    $weight = '60';

    

     echo 'Nama Saya Adalah ' . $name;

     /*
        Variable konstan
        Variable yang tidak bisa diubah nilainya
        1. menggunakan define()      | define('fruit', 'apel');
        2. menggunkan const          | const fruit = 'apel';
     */
    
    define("SITE_NAME", "Elena");
    const BASE_URL = "elena.nurulfikri.ac.id";

    echo SITE_NAME;
    echo '<br>';
    echo BASE_URL;
?>