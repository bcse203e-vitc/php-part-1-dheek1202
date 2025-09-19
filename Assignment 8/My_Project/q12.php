<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Values are in lower case.<br>";
print_r(array_map('strtolower', $Color));
echo"<br><br>";
echo "Values are in upper case.<br>";
print_r(array_map('strtoupper', $Color));
?>

