<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) {
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <link rel="stylesheet" type="text/css" href="css/style1.css">
    </head>
    <body>
        <h2>KOTRA SYDNEY 무역관 K-move 센터</h2>
        <h5><img src="Image/k-move.png" width="300px"></h5>
        <div class="login">
            <form action="config/auth.php" method="post">
                <h3>구직자 & 구인처 데이터베이스 센터:</h3>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"> <?=htmlspecialchars($_GET['error'])?>
                    </div>
                <?php } ?>
                <label><b>K-move ID</b></label>
                    <input type="email" name="email" id="email" value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" placeholder="Username">
                    <br><br>
                <label><b>Password
                    </b>
                </label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <br><br>
                <div class="wrap">

                    <input type="submit" class="button" value="LOGIN">
                </div>
                <br><br>
                    <input type="checkbox" id="check">
                    <span>Remember me</span>
                <br>
            </form>
        </div>
    </body>
</html>

<?php
}else {
    header("Location: welcome.php");
}
?>
