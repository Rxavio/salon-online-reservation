<link href="table.css" rel="stylesheet" type="text/css" />

<?php
 include('connection.php');
  $select=mysqli_query("SELECT * FROM book order by id desc");
  $i=1;
  while($userrow=mysqli_fetch_array($select))
  
  {
  $id=$userrow['id'];
  $firstname=$userrow['firstname'];
   $lastname=$userrow['lastname'];
  $email=$userrow['email'];
  $phone=$userrow['phone'];
  $guest=$userrow['guest'];
  $hair=$userrow['hair'];
  $nail=$userrow['nail'];
  $hour=$userrow['hour'];
  }
?>
<html>
<center>
<table class="view">
<tr><td>
  <p> FIRST NAME : <span><?php echo $firstname; ?></span></p></td></tr>
 <tr><td>
    <p> LAST NAME : <span><?php echo $lastname; ?></span></p></td></tr>
<tr> <td>
  <p> EMAIL : <span><?php echo $email; ?></span></p></td></tr>
 
 <tr> <td>
 <p>PHONE NO : <span><?php echo $phone; ?></span></p></td></tr>
 <tr> <td>
    <p> GUEST : <span><?php echo $guest; ?></span></p></td></tr>
<tr> <td>
    <p> HAIR : <span><?php echo $hair; ?></span></p></td></tr>
<tr> <td>
    <p> NAIL : <span><?php echo $nail; ?></span></p></td></tr>
 <tr> <td>
    <p> HOUR : <span><?php echo $hour; ?></span></p></td></tr></table>
 <tr> <td>
  <p><span><a href="index.html">HOME</a>
   <a href="book.html">BOOK NOW!!</a></span></p></td></tr></table></center>
   
   </html>
