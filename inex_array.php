
<?php
//Index Array
$marks=array(2,3.4,44,55,60);
echo gettype($marks);
echo "<br>";
var_dump($marks);
echo "<br>";
print_r($marks);
echo "<br>";
echo $marks[0];
$length=count($marks);
echo $length;

for($i=0;$i<$length;$i++)
{
    echo $marks[$i]."<br>";
}
?>