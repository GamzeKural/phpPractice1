<?php
function ucgen($num){
    for($i=1; $i<=$num; $i++){
        for($j=0; $j<$i; $j++){
            echo "0 ";
        }
        echo "<br>";
    }
}

ucgen(15);