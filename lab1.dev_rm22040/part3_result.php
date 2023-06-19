<?php
function pirmdiena($x) {
    for($i = 1; $i<=31; $i++){
        $diena = date("l", mktime(0,0,0,1,$i,$x));
        if ($diena == "Monday"){
            echo "The first Monday of year $x is $i January.";
            echo "<br>";
            break;
        }
    }
}

$start = (int)$_GET["start"];
$end = (int)$_GET["end"];

if ($start<0 || $end<1){
    echo "Ievadīti nepareizi skaitļi!";
    exit;
}
else if ($start > $end){
    echo "Ievadīti nepareizi skaitļi!";
    exit;
}

for($i = $start; $i<=$end; $i++){
    pirmdiena($i);
}

?>