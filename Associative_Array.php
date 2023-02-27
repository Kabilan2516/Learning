<?php
$x=array("name"=>"kabilan","age"=>"24","mob"=>"900");
var_dump($x);
echo "<br>";
print_r($x);
echo "<br>";
foreach($x as $value)
{
    echo $value."<br>";
}
foreach(array_keys($x) as $value)
{
    echo $value."<br>";
}
?>