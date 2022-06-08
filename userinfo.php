<?php

$con= mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
 }
 else{
 	echo "No connection";
 }
 mysqli_select_db($con, 'ashal');

 if(isset($_POST['upload'])){
	 
 $user = $_POST['user'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $address=$_POST['address'];
 $code=$_POST['code'];
 $citizen=$_POST['citizen'];
 $jewellery=$_POST['jewellery'];
 $file=$_FILES['image'];
 $comments = $_POST['comments'];

//print_r($file);
$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];

 if($fileerror==0){
	 $destfile='upload/'.$filename;
	 //echo "$destfile";
	 move_uploaded_file($filepath,$destfile);

 }
$query = "insert into userinfodata(user, email, mobile,address,code,citizenship,interestedon, image, comment) values('$user', '$email', '$mobile','$address','$code','$citizen','$jewellery', '$destfile', '$comments')";

  echo "$query";
 mysqli_query($con,$query);
header('location:form.php');
 }
 else{
	 echo "No button has been clicked";
 }
