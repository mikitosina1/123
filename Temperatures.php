<?php
// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
if ($n == 0) {
    $ClosestT = 0;
} else{
    $ClosestT = $inputs[0];
    for ($i = 0; $i < $n; $i++) {   
        $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
        $absClosestT = abs($ClosestT);
        $absT = abs($t);
        if ($absT < $absClosestT || ($absT == $absClosestT && $t > 0)) {
            $ClosestT = $t;
        }
    }
}
echo("$ClosestT\n");
?>