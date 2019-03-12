<?php
$num1=$_POST["first_num"];
$num2=$_POST["second_num"];
$result=$_POST["funct"];
if($result=="Add")

{
	$result=$num1+$num2;
}
if($result=="Sub")
{
	$result=$num1-$num2;
}
if($result=="Multi")
{
	$result=$num1*$num2;
}
if($result=="Div")
{

	$result=$num1/$num2;
}
echo  $result;
?>