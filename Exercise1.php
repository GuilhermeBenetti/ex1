<?php
    $arquivo = 'teste.txt';
    $pattern = '\[[^\]\[]*]';

    $handle = fopen($arquivo, 'r');

    $ler = fread($handle,filesize($arquivo));

    preg_match_all($pattern,$ler,$matches);

    if(!empty($matches)){
        foreach($matches[0] as $match){
            echo $match;
        }
    }

    fclose($handle);
?>