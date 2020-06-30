<?php
function clock() {
    $heure = 0;
    $minute = 0;
    for ($inc = $heure; $inc <= 23; $inc++) {
        for ($jnc = $minute; $jnc <= 59; $jnc++) {
            if ($inc < 10 && $jnc < 10) {
                echo "0$inc : 0$jnc<br>";
            } elseif ($jnc < 10) {
                echo "$inc : 0$jnc<br>";
            } elseif ($inc < 10) {
                echo "0$inc : $jnc<br>";
            } else {
                echo "$inc : $jnc <br>";
            }
        }
    }
}
clock();
?>