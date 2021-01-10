<?php


function insert($value){
    $db_folder = 'db_zelje';
    if(!file_exists($db_folder)) {
        mkdir($db_folder);
    }
    $naziv=uniqid();
    $h = fopen($db_folder.'/'.$naziv.'.txt','a+');
    fwrite($h,$value);
    fclose($h);
}


 
?>

