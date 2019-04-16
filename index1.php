<?php
$data = "<hr/>";
for ($i = 0; $i < 8; $i++) {
    $data = $data . "<br/>";
    for ($j = 0; $j < $i; $j++) {
        $data = $data."+"."&nbsp;&nbsp;";
    }
}
echo $data;
