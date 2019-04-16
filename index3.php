<?php

$data1 = "<hr/>";
for ($i = 0; $i < 7; $i++) {
    $data1 = $data1 . "<br/>";
    for ($j = $i; $j < 7; $j++) {
        $data1 = $data1."+"."&nbsp;&nbsp;";
    }
}
echo $data1;