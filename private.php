<?php
require "db.php";
$_SESSION['user_id']=1;
$_SESSION['user_name']='lana';





?>


<link rel="stylesheet" href="lana.css">
<h3> Login success!<br>
    Hello,<?php echo $_SESSION['logged_user']->username;?>
</h3>


<div class="container">
    <form  class="form-signin" action="upload.php" enctype="multipart/form-data" method="post">
        Select image :
        <input type="file" class="dws-submit" name="image"><br>
        <?php if (isset($_SESSION['img'])): ?>
        <img src="<?php print $_SESSION['img'];?> "><br>
        <?php endif ?>
        <input type="submit" class="dws-submit" value="Upload" name="submit">

    </form>

    <input type="button" value="logout" class="btn btn-lg btn-primary btn-block"  onClick="document.location.href='logout.php'">
</div>

