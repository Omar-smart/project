<?php

$firstname=$_REQUIST['firstname'];
$lastname=$_REQUIST['lastname'];
$email=$_REQUIST['email'];
$password=$REQUIST['pass'];

if(isset($_POST['submit']))
{
$host="localhost";
$user="root";
$password="";
$db="customers";

$conn=mysqli_connect($host,$user,$password,$db);

$insert="insert into customerslist values('firstname','lastname','email','pass');


mysqli_query($conn,$insert);

if($conn){

echo("<h1 style='color:green';'>your registration is Done </h1>");
}else{

echo("<h1 style='color:red';'>your registration is faild </h1>");

}

}






























?>