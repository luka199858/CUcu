<!doctype html>
<html lang="ENG">
<head> <title>Hello</title>

    <?php
    require "db.php";

  $data=$_POST;
if(isset($data['log_in'])) {

    $user = R::findOne('users', 'username = ?', array($data['username']));
    if ($user) {

        if (password_verify($data['password'], $user->password)) {
            $_SESSION['logged_user'] = $user;
            $s = "Successfully login";
            header('Location:index.php');


        } else {

            $password_error = "your password is not correct";
        }

    }
    if (empty($data['username'])) {
        $name_error = "please insert your username";
    }

    if (empty($data['password'])) {
        $password_error = "please insert your password";
    }

}





   

         if(!empty($name_error) && empty($password_error)){
       $error="This username is not registrated";}

    ?>


    <meta charset="UTF-8">
    <meta name="viewport"
                content="width=device-width , user-scalable=on, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="lana.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    


</head>
<body >
 
    <div class="container">
        <div class="card">
            <h1>Login</h1>
        </div>
        <form action="login.php" method="POST">
            
<?php if (isset($s)){?> <div class="alert alert-success" role="alert"><?php echo $s;?> </div> <?php }?>
        <?php if (isset($error)){?> <div class="alert alert-danger" role="alert"><?php echo $error;?> </div> <?php }?>
            <div class="textbox">

                <i class="fas fa-user" style="color: black; float: left; padding: 10px 5px;"></i>

            <input type="text" name="username" class="form-control" placeholder="Username" required value="<?php echo @$data['username']?>" ><br>
            <?php if(isset($name_error)) {?>
                <p><?php echo $name_error ?></p> <?php } ?>
            </div>
            <div class="textbox">
                 <i class="fas fa-lock" style="color: black; float: left;padding: 10px 5px;"></i>



            <input type="password" name="password" class="form-control" placeholder="password " required ><br>
             <?php if(isset($password_error)) {?>
                <p><?php echo $password_error ?></p> <?php } ?>
            </div>
             <br>   <button class="register_button" name="log_in" type="submit">Login</button>

          <br>  <br>  <input class="register_button" name="sign_up" type="button" value="Register" onclick="document.location.href='lana.php'">

        </form>
    </div>
</body>
</html>