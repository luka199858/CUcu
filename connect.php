<?php
$username=filter_input(INPUT_POST,'username');
$firstname=filter_input(INPUT_POST, 'Firstname');
$lastname=filter_input(INPUT_POST, 'Lastname');
$password=filter_input(INPUT_POST, 'password');
$passwordrepeat=filter_input(INPUT_POST, 'passwordrepeat');

if(empty($username))
{
	$name_error="please insert your username";

} elseif (strlen($username)<5 || strlen($username)>10) {
	$name_error='your username needs to have a minimm of 5 letters and maximum of 10';
}
elseif(preg_match('/[A-Z]/', $username)) {

$name_error='your username needs to have only lowercases';
	
}



 if(empty($firstname))
{
	$firstname_error="please insert your firstname";
} 
 if(empty($lastname))
{
	$lastname_error="please insert your lastname";
} 


 if (empty($_POST["Email"])) {
    $email_error = "Email is required";
  } else {
    $email = $_POST["Email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
     
      echo "<br>";
    }
    else $email_error ="$email is not valid email";
  }
  if(empty($password))
{
	$password_error="please insert your password";
} elseif (strlen($password)<8 || strlen($password)>16) {
	$password_error='your password needs to have a minimm of 8 letters and maximum of 16';}
	elseif (!preg_match("#.*^(?=.*[a-z])(?=.*[0-9]).*$#", $password ))
	{
		$password_error="your password needs to have alpha and numeric";}
	



 if(empty($passwordrepeat))
{
	$passwordrepeat_error="please insert your passwordrepeat";
} elseif ($password!=$passwordrepeat){
	$passwordrepeat_error='your passwords dont match';}




	if(empty($name_error) && empty($password_error)  && empty($firstname_error)  && empty($lastname_error) && empty($passwordrepeat_error) && empty($email_error)) {
		include('success.php');
	} else{
		include('lana.php');
		
	}
	?>

