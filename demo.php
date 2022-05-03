<?php 
// echo"hello everyone";

// print "i love php";
// // assignment of veriable 
// $name ="john";
// $day="monday";
// echo $name;
// // integer type data
// $age="30";
// $temperature="-70";
// echo $temperature;
// // float tyoe data 
// $num="20.5";
// echo $num;
// //string type data
// $name1="karan";
// $name2="hari";
// $password="12345";
// echo $name1;
// echo var_dump($password);
// // constant in php
// define ("PI",3.14);
// echo PI;
// // arithmetic operation
// $num1=1;
// $num2=3;
// $result = $num1 + $num2;
// $sub = $num1 - $num2;
// echo $result;
// echo $sub;
// // division
// $mod=$num1/$num2;
// echo $mod;
// $exp = $num1**$num2;
// echo $exp;
// increment /decrement
$num = 5;
$num1 = $num + 1;
echo $num1;
// if condition
$age = 18;
if($age>=18){
echo"eligible";
}
else{
    echo"not eligible";
}
function worker($item){
    echo "Buy $item";
    return "Ram money";
}
$temp = worker("buger");
echo $temp;
?>