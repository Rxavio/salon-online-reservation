<?php
$username = 'root';
$password = 'godpro';
$db = 'news';
if(isset($_POST['send']));
{
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$guest=$_POST['guest'];
$hair=$_POST['hair'];
$nail=$_POST['nail'];
$hour=$_POST['hour'];

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");

if(!is_numeric($id)){
die('<h2><center><font color="blue"><i>oops,use number to enter your id</i></font></center></h2>');
}
if(is_numeric($firstname)){
die('<h2><center><font color="blue"><i>oops,use only letters for first name</i></font></center></h2>');
}
if(is_numeric($lastname)){
die('<h2><center><font color="blue"><i>oops,use only letters for last name</i></font></center></h2>');
}
if(!is_numeric($phone)){
die('<h2><center><font color="blue"><i>oops,use number to enter your phone number</i></font></center></h2>');
}
if(is_numeric($guest)){
die('<h2><center><font color="blue"><i>oops,use only letters for selecting how many guests!</i></font></center></h2>');
}
if(is_numeric($hair)){
die('<h2><center><font color="blue"><i>oops,use only letters for selecting hair style!</i></font></center></h2>');
}
if(is_numeric($nail)){
die('<h2><center><font color="blue"><i>oops,use only letters for selecting nail style!</i></font></center></h2>');
}
if(empty($id))
{
		echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please enter your id!</font></CENTER>";
}
if(empty($firstname))
{
		echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please enter firstname!</font></CENTER>";
}

elseif(empty($lastname))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please enter lastname!</font></CENTER>";
}

	elseif(empty($email))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please enter your email!</font></CENTER>";
}
		elseif(empty($phone))

{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please enter your phone number!</font></CENTER>";

}
elseif(empty($guest))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please select how many you are!</font></CENTER>";
}
elseif(empty($hair))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please select your hairstyle!</font></CENTER>";
}
elseif(empty($nail))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please select your nailstyle!</font></CENTER>";
}
elseif(empty($hour))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please enter your booking time!</font></CENTER>";
}
else
	{
		//$sql="INSERT INTO work VALUES('$firstname','$lastname','$email', '$phone', '$idea')";	

	$sql="INSERT INTO book VALUES('$id','$firstname','$lastname', '$email', '$phone', '$guest', '$hair', '$nail','$hour')";	
   $query=mysqli_query($conn,$sql);
		{
	 echo"<CENTER><FONT SIZE='5' COLOR='purple'>successfully booked!!!!!</font></CENTER>";

  echo"<FONT SIZE='6' COLOR='blue'><a href='index.html'>click here back to home </a></font></br>";	 
  
		}
		
		}
}
 
?>