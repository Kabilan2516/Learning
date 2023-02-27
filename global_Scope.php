<?php
$x="outside";
function call()
{
global $x;
$x="inside";
}
echo$x."<br>";
call();
echo $x;
?>