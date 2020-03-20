<?php
    require '..\main web\koneksi.php';

    // if( isset($_POST["login"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

        
    // }

    if( isset($_POST["login"])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $error = "ketikan username dan password anda!";
        $err = false;

        $login = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        $data = mysqli_fetch_assoc($login);
        $cek = mysqli_num_rows($login);
    
            if($cek > 0){
               if($password === $data['password']){
                    header("Location: ..\main web\index.php");
                    exit;
               }else{
                   $error = "password salah";
                   $err = true;
                   header("login.php");
               }
                
            }else{
                $error =  "akun belum terdaftar!!";
                $err =true;
                header("login.php");
            }

    }
?> 



<html>
    <head>
        <title>Login Smkn 1 Kertosono</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    
    <div class="login-btn">
        <form action="" method="post">
        <h2 style="color: white;">Login</h2>
            <input type="text" name="username" placeholder="Username" id="username" autocomplete="off"  required><br><br>
            <input type="password" name="password" placeholder="Password" id="password" required><br><br>
            <button type="submit" name="login" >Login</button>
            <br><br><br>
            <a class="alink" href="register.php"><p>Belum punya akun?</p></a>
            <?php if( isset($error)) : ?>
                <p class="err"> <?php echo $error ?> </p>
            <?php endif; ?>
        </form>
       
    </div>


</body>
</html>