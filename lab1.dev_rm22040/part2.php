<?php

header ("Content-Type: text/plain");
echo "Part 2, subtask1 \n";

$alfa = array("a", "ā", "b", "c", "č", "d", "e", "ē", "f", "g", "ģ");

for($i = 0; $i<12; $i++){
    $m = $i;
    for($a = 0; $a<$m; $a++){
        $print = $alfa[$a];
        echo "$print";
        //echo "$alfa[$a]";
    }
    echo "\n";

}

function pirmdiena($x) {
    for($i = 1; $i<=31; $i++){
        $diena = date("l", mktime(0,0,0,1,$i,$x));
        if ($diena == "Monday"){
            echo "The first Monday of year $x is $i January.";
            echo "\n";
            break;
        }
    }
}

echo "\n";

pirmdiena(2023);
for($i = 0; $i<5; $i++){
    $lietojams = 2023;
    $random = rand(0, 30)%100;
    $lietojams = $lietojams - $random;
    pirmdiena($lietojams);
}
?>