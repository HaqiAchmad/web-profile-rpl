<?php
    require '..\main web\koneksi.php';
    

    if( isset($_POST["daftar"])){
        if( registrasi($_POST) > 0){
            header ("Location: login.php");
            exit;
        }else{
            echo mysqli_error($conn);
            header ("Location: register.php");
        }
        $error = true;
    }

    

?>


<html>
    <head>
        <title>Daftar Akun</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    
    <div class="login-btn">
        <form action="" method="post">
            <h2 style="color: white;">Daftar Akun</h2>
            <input type="text" name="username" placeholder="Username" id="username" autoco autocomplete="off" required><br><br>
            <input type="text" name="alamat" placeholder="Alamat" id="alamat" autocomplete="off" required><br><br>
            <input type="password" name="password" placeholder="Password" id="password" autocomplete="off" required><br><br>
            <input type="password" name="retypepass" placeholder="Retype Password" id="retypepass" autocomplete="off" required><br><br>
            <button type="submit" name="daftar" >Daftar & Login</button>

            <!-- <?php if( isset($error)) : ?>
                <p class="err"> <?php echo "akun tersebut sudah terdaftar!"; ?> </p>
            <?php endif; ?> -->


        </form>

    </div>


</body>
</html>