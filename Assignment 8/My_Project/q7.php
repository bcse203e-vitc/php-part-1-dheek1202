<?php
$arr = [1, 2, 3, 4, 5];
$pos = 3;  // Insert before index 3 (0-based)

array_splice($arr, $pos, 0, '$');

echo "Original array:<br>1 2 3 4 5<br>";
echo "After inserting '\$' the array is:<br>";
echo implode(' ', $arr);
?>

