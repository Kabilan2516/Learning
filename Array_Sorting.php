<?php
$x=array("A","C","D","B","E");
print_r($x);
 sort($x);
echo "<br>";
print_r($x);
 rsort($x);echo "<br>";
print_r($x);

$a=array("name"=>"kabi","mob"=>"realme","gen"=>"boy");
 asort($a);echo "<br>";//sorting depents upon values assending order
print_r($a);
 arsort($a);echo "<br>";// sorting depents upon values descending order
print_r($a);
 ksort($a);// sorting depents upon Keys assending order
echo "<br>";
print_r($a);
 krsort($a);//sorting depents upon keys desending order
echo "<br>";
print_r($a);
?>