<?php
// <!-- Datatypes -->
//   1. int

 $age = 29;
echo $age;

echo "<br>";
echo "<br>";

//2. float

$deposit = 5000.00;
var_dump($deposit);
echo "<br>";
echo "<br>";
// 3.boolean
$is_completed = true;
var_dump($is_completed);

echo "<br>";
echo "<br>";
if ($is_completed){
    echo "success";
}else{
    echo "fail";
}

echo "<br>";
echo "<br>";
// 4. string 

$msg = " Jhon, 4885125874412, 29";
var_dump($msg);

echo "<br>";
echo "<br>";

$explode_msg = explode(",", $msg);
var_dump($explode_msg);

echo "<br>";
echo "<br>";

$name = $explode_msg[0];
$id = $explode_msg[1];
$age = $explode_msg[2];

echo $name, $id, $age;
// echo "Name: {$name}, Id: {$id}, Age: {$age}";
echo "<br>";
echo "<br>";
// 5.Array
// a.indexed
$students = ["mary", "ali", "yusuf", "owino", "isaac"];
var_dump($students);

echo "<br>";
echo "<br>";
// b.associative array

$user_input = array("username" => "ali", "email" =>"ali@gmail.com", "password" => "541785");
var_dump($user_input);
echo "<br>";echo "<br>";
// 6.null 

$cart = null;
var_dump($cart);

echo "<br>";echo "<br>";
class Student{
    public $age = 20;
}
$student = new Student(); 
var_dump($student);