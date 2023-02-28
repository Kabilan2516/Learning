<?php
$data=array("kabilan","rogesh","shiva","sandeep","bala");
if($_POST['submit'])
{
$username=$_POST['name'];
$password=$_POST['pass'];
if(in_array($username,$data))
{
if(strlen($username)>5 && strlen($username)<10)
    {
    echo "Welcom back ".$username."<br>";
    }
}
    /*elseif (in_array( $username,$data))
        {
            echo "Welcom back ".$data."<br>";
        }*/
else
    {
    echo "sorry not allowed";

    }
}
?>