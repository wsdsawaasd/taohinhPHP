<?php
$data3 = "<hr/>";
for ( $i=7;$i>=1;$i--) {
    $data3 = $data3 . "<br/>";
    for ($j=1;$j<=$i;$j++) {
        $data3 = $data3."+"."&nbsp;&nbsp;";
    }
}
echo $data3;