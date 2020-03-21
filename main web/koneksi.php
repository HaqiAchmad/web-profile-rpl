<?php 
    $conn = mysqli_connect("localhost", "root", "", "dbsiswa_haqi");


    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row; 
            }
        return $rows;    
    }


    function registrasi($data){
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $alamat = strtolower(stripslashes($data["alamat"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $retypepass = mysqli_real_escape_string($conn, $data["retypepass"]);

           
        // mengecek akun sudah terdaftar atau belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
            if(mysqli_fetch_assoc($result)){
                echo "<script>
                        alert('username tersebut sudah terdaftar');
                    </script>
                ";
                return false;
            }if($password !== $retypepass){
                echo "<script>
                    alert('retype password anda tidak cocok');
                    </script>";
                return false;   
            }
                
        mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$alamat', '$password')");
        return true;
        
        
    }


    function cari($keyword){
        $query = "SELECT * FROM siswa WHERE 
        nama LIKE '%$keyword%' OR 
        nis LIKE '%$keyword%' OR
        alamat LIKE '%$keyword%' OR
        ttl LIKE '%$keyword%'
        ";
    
        return query($query);
    }



?>