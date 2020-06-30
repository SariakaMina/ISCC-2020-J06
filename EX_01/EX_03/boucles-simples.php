<?php
function compter($maximum) {
    $inc = 1;
    while ($inc <= $maximum){
        echo "$inc <br>";
        $inc++;
    }
}
function compter_for($maximum){
    for ($inc = 1; $inc <= $maximum; $inc++){
        echo "$inc <br>";
    }
}
    compter(10);
    compter_for(10);
?>