<?php

function toJoin($arg){
    $table = [];
    $col = [];
    $sortie = "";
    foreach ($arg as $key => $value) {
        if ($key%2 === 0) {
        array_push($table, $value);
        } else {
        array_push($col, $value);
        }
    }

    $sortie = $table[0];
    for ($i=0;$i<count($table)-1;$i++){
        $sortie .= ' JOIN ' . $table[$i+1] . ' ON ' . $table[$i] . '.' . $col[$i] . ' = '  . $table[$i+1] . '.' . $col[$i+1];
    }
    return $sortie;
}

?>