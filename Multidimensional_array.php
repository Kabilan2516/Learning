<?php
/*
$x=array(
    array("a","b","c","d"),
    array("p","q","r","s"),
    array("w","x","y","z")

);
echo count($x)."<br>";
echo count($x[0]);
for($i=0;$i<count($x);$i++)
{echo "<br>";
    for($j=0;$j<count($x[$i]);$j++)
    {
        echo $x[$i][$j];
    }
}*/
#Multidimensional Array with Key=>values Type
$a=array(
    array("name"=>"kabi","age"=>"23","mark"=>85),
    array("name"=>"kabf","age"=>"24","mark"=>75),
    array("name"=>"kabfsi","age"=>"25","mark"=>89)

);
//var_dump($a);
foreach($a as $index) //use to find values
{ echo "<br>";
    foreach($index as $values) 
    {
        echo $values;
    }
}
foreach($a as $index)
{ echo "<br>";
    foreach(array_keys($index) as $values)
    {
        echo $values;
    }
}
?> 