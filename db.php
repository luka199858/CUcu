<?php 
require"rb.php";
 R::setup( 'mysql:host=localhost;dbname=practice3',
        'root', '' );
        
session_start();
?>

<?php


$con= mysqli_connect('localhost', 'root', '', 'practice3');

$query= mysqli_query($con, "SELECT * FROM user");

$array= mysqli_fetch_array($query);

while ($row = mysqli_fetch_array($query)) {
 echo $row['username'], ' ',$row['Firstname'], ' ', $row['Lastname'], ' ', $row['email'], ' ', $row['password'], ' ', $row['password_repeat'] ;
}
?>

<?php



function selectAllFrom($table)
{
 $con= mysqli_connect('localhost', 'root', '', 'practice3');

 $query= mysqli_query($con, "SELECT * FROM user");

 $array= mysqli_fetch_array($query);

 while ($row = mysqli_fetch_array($query)) {
  echo $row['username'], ' ',$row['Firstname'], ' ', $row['Lastname'], ' ', $row['email'], ' ', $row['password'] ;
 }} ?>



