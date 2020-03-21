<?php
    require 'koneksi.php';


    $nis = $_GET["nis"];
    // $result = query("SELECT * FROM siswa WHERE nis = $nis");
    $result = mysqli_query($conn, "SELECT * FROM siswa WHERE nis = $nis");
    $data = mysqli_fetch_assoc($result);

?>
<html>
<head>

	<title>Profil <?php echo $data["nama"] ?>\<?php echo $data["nis"]?></title>

    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Josefin Sans', sans-serif;
        }

        body{
            background-color: #141313;
        }

        .wrapper{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 600px;
            height: 350px;
            display: flex;
            box-shadow: 0 0 20px rgba(0, 0, 0, 15);
        }

        .wrapper .left{
            width: 40%;
            background: linear-gradient(to right,#1417c9,#01dbdf);
            padding: 30px 25px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            text-align: center;
            color: #fff;
        }

        .wrapper .left img{
            border-radius: 5px;
            margin-bottom: 10px;
            width: 120px;
        }

        .wrapper .left h4{
            margin-bottom: 5px;
            font-size: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .wrapper .left p{
            font-size: 14px;
            color: #0f0f0f;
            font-weight: bold;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .wrapper .right{
            width: 65%;
            background: #f4f4f8;
            padding: 30px 25px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .wrapper .right .info,
        .wrapper .right .projects{
            margin-bottom: 25px;
        }

        .wrapper .right .info h3,
        .wrapper .right .projects h3{
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 2px solid #00ff00;
            color: #0b0b0c;
            text-transform: uppercase;
            letter-spacing: 5px;
            font-size: 20px;
        }

        .wrapper .right .info_data,
        .wrapper .right .projects_data{
            display: flex;
            justify-content: space-between;
        }

        .wrapper .right .info_data .data,
        .wrapper .right .projects_data .data{
            width: 45%;
        }

        .wrapper .right .info_data .data h4,
        .wrapper .right .projects_data .data h4{
                color: #000;
                margin-bottom: 10px;
                font-size: 16px ;
        }

        .wrapper .right .info_data .data p,
        .wrapper .right .projects_data .data p{
            font-size: 13px;
            margin-bottom: 15px;
            color: #000;
        }

        .wrapper .social_media ul{
            display: flex;
            justify-content: right;
        }

        .wrapper .social_media ul li{
            width: 90px;
            height: 45px;
            background: linear-gradient(to right,#db2424,#ca1212);
            margin-right: 10px;
            border-radius: 5px;
            text-align: center;
            line-height: 45px;
        }

        .wrapper .social_media ul li:hover{
            background: linear-gradient(to right,#0b0feb,#0307c9);
        }

        .wrapper .social_media ul li a{
            color :#fff;
            display: block;
            font-size: 15px;
            text-decoration: none;
            font-weight: bold;
            font-family: cursive;
        }

        .wrapper .social_media ul li a:hover{
            color: #000;
        }
    </style>


</head>
<body>

        <br><br>
        <h1 style="text-align:center; color: #fff; font-size: 35px; font-family: cursive;">Menampilkan data dari <?php echo $data["nama"]; ?></h1>
    

<div class="wrapper">
    <div class="left">
        <img src="..\dbase\foto\<?php echo $data["foto"];  ?>" width="50px"> 
        <h4> <?php echo $data["nama"]; ?></h4>
         <p>Software Engineer</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Informasi</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Nis</h4>
                    <p><?php echo $data["nis"]; ?></p>
                 </div>
                 <div class="data">
                   <h4>Gender</h4>
                    <p><?php echo $data["gender"]; ?></p>
              </div>
            </div>
        </div>
      
        <div class="info">
            <!-- <h3>Information</h3> -->
            <div class="info_data">
                 <div class="data">
                    <h4>Alamat</h4>
                    <p><?php echo $data["alamat"]; ?></p>
                 </div>
                 <div class="data">
                   <h4>TTL</h4>
                    <p><?php echo $data["ttl"]; ?></p>
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <li><a href="index.php">Kembali</a></li>
          </ul>
      </div>
    </div>
</div>

</body>
</html>