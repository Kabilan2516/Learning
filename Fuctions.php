<?php 
function demo()
{
    name();
    echo " demo";
    cal();
}
demo();
function cal()
{
    echo 2+2;
}
function name()
{
    echo "kabilan";
}

/* ~~~~~~~~~~function using parameter~~~~~~~~~~~~*/
echo "<br>";
function calculation($x,$y)
{
    $sum=$x+$y;
    echo $sum;
}
calculation(2,3);echo "<br>";
calculation(2,2);echo "<br>";
/* ~~~~~~~~~~function using return values~~~~~~~~~~~~*/
function add($a,$b)
{
    $add=$a+$b;
    return $add;
}
$result=add(33,2);
echo $result."<br>";
$next=add(24,$result);
echo $next;
?>