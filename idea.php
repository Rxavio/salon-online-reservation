<?php

$username = 'root';
$password = 'godpro';
$db = 'news';

if(isset($_POST['send']));
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$idea=$_POST['idea'];

$conn = new mysqli ('localhost',$username, $password, $db) or die("unable to connect");


if(is_numeric($firstname)){
die('<h2><center><font color="blue"><i>oops,use only letters for first name</i></font></center></h2>');
}
if(is_numeric($lastname)){
die('<h2><center><font color="blue"><i>oops,use only letters for last name</i></font></center></h2>');
}
if(!is_numeric($phone)){
die('<h2><center><font color="blue"><i>oops,use number to enter your phone number</i></font></center></h2>');
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
elseif(empty($idea))
{
	echo"<CENTER><FONT SIZE='5' COLOR='#C0C0C0'>Please type your comment!</font></CENTER>";
}
else
	{
$sql="INSERT INTO work VALUES('$firstname','$lastname','$email', '$phone', '$idea')";	
$query=mysqli_query($conn,$sql);
if($query){
    echo"<CENTER><FONT SIZE='5' COLOR='purple'>successfully inserted!</font></CENTER>";
    echo"<FONT SIZE='6' COLOR='blue'><a href='index.html'>click here back to home </a></font></br>";
           }
//$query = "INSERT INTO work (`firstname`,`lastname`,`email`,`phone`,`idea`) VALUES ('$firstname','$lastname','$email','$phone','$idea')";
	}
   }
?>