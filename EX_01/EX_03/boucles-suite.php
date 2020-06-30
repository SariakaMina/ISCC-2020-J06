<?php
function compter_dizaine($maximum) {
    for ($inc = 1; $inc <= $maximum; $inc++){
        echo "$inc <br>";
        if ($inc % 10 == 0 && $inc % 100 != 0){
            echo "Ceci est une dizaine <br>";
        } elseif ($inc % 100 == 0) {
            echo "Ceci est une centaine <br>"; 
        }
    }
}
    compter_dizaine(100);
?>