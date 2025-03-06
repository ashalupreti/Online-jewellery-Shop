<?php

$con= mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
 }
 else{
 	echo "No connection";
 }
 mysqli_select_db($con, 'kritika');

 if(isset($_POST['upload'])){
	 
 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $address=$_POST['address'];
 $code=$_POST['code'];
 $jewellery=$_POST['jewellery'];
 $comments = $_POST['comments'];

$query = "insert into userinfodata(user, email, mobile,address,code,interestedon, comment) values('$user', '$email', '$mobile','$address','$code','$jewellery', '$comments')";

  echo "$query";
 mysqli_query($con,$query);
header('location:form.php');
 }
 else{
	 echo "No button has been clicked";
 }
