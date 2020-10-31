
<?php 
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="leotech";
$connt =mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

$Name =$_POST['fullname'];
$Email =$_POST['email'];
$Phone =$_POST['phone'];
$Address=$_POST['address'];
$Subject =$_POST['subject'];
$Message=$_POST['message'];

$sql="INSERT INTO webinfo(name,email,phone,address,subject,message)Values('$Name','$Email','$Phone','$Address','$Subject','$Message')";

$query =mysqli_query($connt,$sql);

if($query){
	$msg="message send";
}
else{
 $msg="message is not send";
}
echo $msg;
?>


 


 