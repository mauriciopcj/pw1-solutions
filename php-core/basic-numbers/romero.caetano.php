<?php
foreach(range(0, 99) as $number){
    if($number < 10){
        $aux = '0'.strval($number);
    }
    else{
        $aux = $number;
    }
    echo ( $aux );
    echo(' ');
    if(is_int(($aux-9)/10)){
        echo("\n");
    }
}
echo("\n");

foreach(range(0, 9) as $i){
    foreach(range(0, 9) as $j){
        echo(strval($i).strval($j));
        echo ' ';
    }
    echo "\n";
}
echo("\n");

foreach(range(99, 0) as $number){
    if($number < 10){
        $aux = '0'.strval($number);
    }
    else{
        $aux = $number;
    }
    echo ( $aux );
    echo(' ');
    if(is_int(($aux)/10)){
        echo("\n");
    }
}
echo("\n");

foreach(range(99, 0) as $number){
    if($number < 10){
        $aux = '0'.strval($number);
    }
    else{
        $aux = $number;
    }
    if($number%2){
        echo ( $aux );
        echo(' ');   
    }
    if(is_int(($aux-1)/10)){
        echo("\n");
    }
}
echo("\n");