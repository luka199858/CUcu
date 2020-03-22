<!doctype html>
<html lang="ENG">
<head>
	<title>Registration</title>

	<meta charset="UTF-8">
    <meta name="viewport"
                content="width=device-width , user-scalable=on, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="lana.css">

</head>
<body>
 
    <div class="container">
    	<div class="card">
    		<h1>Registration</h1>
    	</div>
		<form action="connect.php" method="POST">



            <input type="text" name="username" class="form-control" placeholder="Username" ><br>
            <?php if(isset($name_error)) {?>
            	<p><?php echo $name_error ?></p> <?php } ?>

            



            <input type="text" name="Firstname" class="form-control" placeholder="Firstname" ><br>
             <?php if(isset($firstname_error)) {?>
            	<p><?php echo $firstname_error ?></p> <?php } ?>
            <input type="text" name="Lastname" class="form-control" placeholder="Lastname" ><br>
             <?php if(isset($lastname_error)) {?>
            	<p><?php echo $lastname_error ?></p> <?php } ?>
			<input type="text" name="Email" class="form-control" placeholder="email" ><br>
			 <?php if(isset($email_error)) {?>
            	<p><?php echo $email_error ?></p> <?php } ?>
			<input type="password" name="password" class="form-control" placeholder="password" ><br>
			 <?php if(isset($password_error)) {?>
            	<p><?php echo $password_error ?></p> <?php } ?>

            
            <input type="password" name="passwordrepeat" class="form-control" placeholder="passwordrepeat" ><br> <?php if(isset($passwordrepeat_error)) {?>
            	<p><?php echo $passwordrepeat_error ?></p> <?php } ?>
			<button class="register_button" type="submit">Register</button>
		</form>
	</div>
</body>
</html>