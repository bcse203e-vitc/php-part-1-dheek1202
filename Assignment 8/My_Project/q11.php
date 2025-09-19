<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = [];

foreach ($array1 as $key => $subarr) {
    array_unshift($subarr, $array2[$key]);
    $result[$key] = $subarr;

}

print_r($result);
?>

