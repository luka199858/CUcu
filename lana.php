<!doctype html>
<html lang="ENG">
<head>
    <?php
    require "db.php";

  $data=$_POST;
if(isset($data['sign_up'])){
    if(empty($data['username']))

{
    $name_error="please insert your username";

} elseif (strlen($data['username'])<5 || strlen($data['username'])>10) {
    $name_error='your username needs to have a minimm of 5 letters and maximum of 10';
}
elseif(preg_match('/[A-Z]/', $data['username'])) {

$name_error='your username needs to have only lowercases';
    
}



 if(empty($data['Firstname']))
{
    $firstname_error="please insert your firstname";
} 
 if(empty($data['Lastname']))
{
    $lastname_error="please insert your lastname";
} 


 if (empty($data["Email"])) {
    $email_error = "Email is required";
  } else {
    
    if (filter_var($data['Email'], FILTER_VALIDATE_EMAIL)){
     
      echo "<br>";
    }
    else {

        $email_error ="email is not valid email";
    }
  }
  if(empty($data['password']))
{
    $password_error="please insert your password";
} elseif (strlen($data['password'])<8 || strlen($data['password'])>16) {
    $password_error='your password needs to have a minimm of 8 letters and maximum of 16';}
    elseif (!preg_match("#.*^(?=.*[a-z])(?=.*[0-9]).*$#", $data['password']))
    {
        $password_error="your password needs to have alpha and numeric";}
    



if ($data['password']!=$data['passwordrepeat']){
    $passwordrepeat_error='your passwords dont match';}




    if(empty($name_error) && empty($password_error)  && empty($firstname_error)  && empty($lastname_error) && empty($passwordrepeat_error) && empty($email_error)){
        $user=R::dispense('users');
        $user->username=$data['username'];
        $user->Firstname=$data['Firstname'];
        $user->Lastname=$data['Lastname'];
        $user->Email=$data['Email'];
        $user->password=password_hash($data['password'],PASSWORD_DEFAULT);
        $user->passwordrepeat=password_hash($data['passwordrepeat'],PASSWORD_DEFAULT);
        R::store($user);
        header('Location:login.php');

    }
    else{$error="This username is taken";}}
    ?>


    <title>Registration</title>

    <meta charset="UTF-8">
    <meta name="viewport"
                content="width=device-width , user-scalable=on, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="lana.css">

</head>
<body>
<nav class="navbar">
    <div class="container-fluid">

        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" style="color: black;">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: black;">Page 1 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#" ">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li><a href="#" style="color: black;">Page 2</a></li>
        </ul>
    </div>
</nav>

    <div class="container">
        <div class="card">
            <h1>Registration</h1>
        </div>
        <form action="lana.php" method="POST">

            <?php if (isset($s)){?> <div class="alert alert-success" role="alert"><?php echo $s;?> </div> <?php }?>
        <?php if (isset($error)){?> <div class="alert alert-danger" role="alert"><?php echo $error;?> </div> <?php }?>

            <div class="textbox">
            <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo @$data['username']?>" ><br>
            <?php if(isset($name_error)) {?>
             <br>   <p><?php echo $name_error ?></p> <?php } ?>
            </div>



            <div class="textbox">
            <input type="text" name="Firstname" class="form-control" placeholder="Firstname"  required value="<?php echo @$data['Firstname']?>""><br>
             <?php if(isset($firstname_error)) {?>
            <br>    <p><?php echo $firstname_error?></p> <?php } ?>
            </div>
            <div class="textbox">
            <input type="text" name="Lastname" class="form-control" placeholder="Lastname" required value="<?php echo @$data['Lastname']?>" ><br>
             <?php if(isset($lastname_error)) {?>
            <br>    <p><?php echo $lastname_error ?></p> <?php } ?>
            </div>
            <div class="textbox">
            <input type="text" name="Email" class="form-control" placeholder="email" required value="<?php echo @$data['Email']?>" ><br>
             <?php if(isset($email_error)) {?>
            <br>    <p><?php echo $email_error ?></p> <?php } ?>
            </div>
            <div class="textbox">
            <input type="password" name="password" class="form-control" placeholder="password" required value="<?php echo @$data['password']?>"><br>
             <?php if(isset($password_error)) {?>
             <br>   <p><?php echo $password_error ?></p> <?php } ?>
            </div>
            <div class="textbox">
            <input type="password" name="passwordrepeat" class="form-control" placeholder="passwordrepeat" required value="<?php echo @$data['passwordrepeat']?>"><br> <?php if(isset($passwordrepeat_error)) {?>
             <br>   <p><?php echo $passwordrepeat_error ?></p> <?php } ?>
            </div>
          <br>  <button class="register_button" name="sign_up" type="submit">Register</button>
        </form>
    </div>
</body>
</html>