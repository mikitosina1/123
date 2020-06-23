<?php
fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $H);
$T = stream_get_line(STDIN, 256 + 1, "\n");
$A = ord("A");
$result = "";
for ($i = 0; $i < $H; $i++) {
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
    for($j = 0; $j < strlen($T); $j++) {
        $letter = strtoupper($T[$j]);
        $indexletter = ord($letter) - $A;
        if(0 <= $indexletter && $indexletter <= 25) {} else $indexletter = 26;
        $result .= substr($ROW, $L*$indexletter,$L);
    } $result .= "\n";
} echo("$result\n");
?>