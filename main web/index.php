<?php
    require 'koneksi.php';

    // session_start();
    // if($_SESSION['status'] != "login"){
    //     header("Location: ..\login\login.php");
    // }


    $siswa = query("SELECT * FROM siswa");

    // $data = mysqli_fetch_assoc($result);
    // var_dump ($data);
        // while( $getter = mysqli_fetch_assoc($result)){
        //     var_dump ($getter["nama"]);
        // }

        $key = "";
        if(isset($_POST["cari"])){
            $siswa = cari($_POST["keyword"]);
            $key = $_POST["keyword"];
        }
?>


<html>
    <head>
        <title>Rekayasa Perangkat Lunak</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

	<div class="navbar">
        <a href="#siswa" class="navgbr">Xi-Rpl 1</a>
		<nav class="nav">
			<ul>
				<li><a href="#about">About</a></li>
				<li><a href="#struktur">Struktur</a></li>
				<li><a href="#piket">Piket</a></li>
				<li><a href="#jadwal">Jadwal</a></li>
				<li><a href="#siswa">Siswa</a></li>
			</ul>
		</nav>
    </div>

    
    <!-- <div class="gbr"> -->
        <img src="..\dbase\gbr.jpg" alt="SMKN 1 Kertosono" width="100%"> <br><br><br><br>
            <!-- <div class="txtGbr">
                <p>Smk Negeri 1 Kertosono </p>
                <p>Xi-Rpl 1 Oficial Website</p>
            </div>
    </div> -->
    
    <a id="about"></a>
    <br><br><br><br><br><br>
    <p class="teks01">Pengertian Rpl</p>
    <br><br><br>

    <center>
        <table width="95%">
            <tr>
                <th width="95%"></th>
            </tr>
            <tr>
                <td><h1 class="judul">Apa itu Rpl</h1></td>
            </tr>
            <tr>
                <td>
                    <p class="keterangan">
                        <br> Rekayasa Perangkat Lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas. 
                        Rekayasa perangkat lunak adalah pengubahan perangkat lunak itu sendiri guna mengembangkan, memelihara, dan membangun kembali dengan menggunakan prinsip rekayasa untuk menghasilkan perangkat lunak yang dapat bekerja lebih efisien dan efektif untuk pengguna. <br><br>
                    </p>
                </td>
            </tr>
            <tr>
                <td><h1 class="judul">Tujuan Rpl</h1></td>
            </tr>
            <tr>
                <td>
                    <p class="keterangan">        
                      <br>Tujuan dari Rekayasa Perangkat Lunak antara lain Memperoleh biaya produksi perangkat lunak yang rendah, Menghasilkan perangkat lunak yang kinerjanya tinggi, Menghasilkan perangkat lunak yang dapat bekerja pada berbagai jenis platform, Menghasilkan perangkat lunak yang biaya perawatannya rendah. <br><br>
                    </p>
                </td>
            </tr>
            <tr>
                <td><h1 class="judul">Sejarah Rpl</h1></td>
            </tr>
            <tr>
                <td>
                    <p class="keterangan">
                    <br> Istilah software engineering, pertama kali digunakan pada akhir tahun 1950-an dan sekitar awal 1960-an. Pada tahun 1968, NATO menyelenggarakan konferensi tentang software engineering di Jerman dan kemudian dilanjutkan pada tahun 1969. Meski penggunaan kata software engineering masukan konferensi tersebut menimbulkan debat tajam tentang aspek engineering dari pengembangan perangkat lunak, banyak pihak yang menganggap konferensi tersebutlah yang menjadi awal tumbuhnya profesi rekayasa perangkat lunak
                    </p>
                </td>
            </tr>
        </table>
    </center>


    <a id="struktur"></a>
    <br><br><br><br><br><br>
    <p class="teks01">Struktur Kelas</p>
    <br><br><br><br>

    <center>
    <table  width="70%" >
        <tr>
            <th width="35%"></th>
            <th width="35%"></th>
        </tr>
        <tr>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Budi Suroso, S.Pd</p>
                <p class="jabatan">Ketua Jurusan</p><br><br>
                <br>
            </td>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Erna Rk, S.Pd</p>
                <p class="jabatan">Wali Kelas</p><br><br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">kristina Apriliya</p>
                <p class="jabatan">Ketua kelas</p><br><br>
                <br>
            </td>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Ilham Maulana</p>
                <p class="jabatan">Wakil Ketua</p><br><br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Inna Fatahna</p>
                <p class="jabatan">Sekertaris 1</p><br><br>
                <br>
            </td>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Aning Rahma A</p>
                <p class="jabatan">Sekertaris 2</p><br><br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Adetya Wardani</p>
                <p class="jabatan">Bendahara 1</p><br><br>
                <br>
            </td>
            <td>
                <center><img class="logo" src="..\dbase\logo.png" alt="Smkn1Kts"></center><br>
                <p class="nama-orang">Julia Sabrina</p>
                <p class="jabatan">Bendahara 2</p><br><br>
                <br>
            </td>
        </tr>
    </table>
    </center>

    <a id="jadwal"></a>
    <br><br><br><br><br>
    <p class="teks01">Jadwal Pelajaran</p>
    <br><br><br><br>


    <center>
       <table class="jdw-mapel" border="2px solid #000" width="80%">
           <thead class="jdw-mapel-head">
               <td width="4%">jam</td>
               <td width="11%">waktu</td>
               <td width="14%">Senin</td>
               <td width="14%">Selasa</td>
               <td width="14%">Rabu</td>
               <td width="14%">Kamis</td>
               <td width="14%">Jumat</td>
           </thead>
           <tbody>
                <tr>
                    <td class="jam">1</td>
                    <td class="waktu">07:00-07:45</td>
                    <td>UPACARA</td>
                    <td>PKK</td>
                    <td>PENJAS</td>
                    <td>PKN</td>
                    <td>PPL</td>
                </tr>
                <tr class="activeRow">
                    <td class="jam">2</td>
                    <td class="waktu">07:46-08:30</td>
                    <td>MTK</td>
                    <td>PKK</td>
                    <td>PENJAS</td>
                    <td>PKN</td>
                    <td>PPL</td>
                </tr>
                <tr>
                    <td class="jam">3</td>
                    <td class="waktu">08:31-09:15</td>
                    <td>MTK</td>
                    <td>PKK</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>PPL</td>
                </tr>
                <tr>
                    <td class="jam">4</td>
                    <td class="waktu">09:16-10:00</td>
                    <td>B. INGGRIS</td>
                    <td>PKK</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>PPL</td>
                </tr>
                <tr>
                    <td class="jam">na</td>
                    <td class="waktu">10:01-10:15</td>
                    <th colspan="5" class="istirahat">ISTIRAHAT</th>
                </tr>
                <tr class="activeRow"> 
                    <td class="jam">5</td>
                    <TD class="waktu">10:16-11:00</TD>
                    <td>B. INGGRIS</td>
                    <td>B. INDO</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>MTK</td>
                </tr>
                <tr>
                    <td class="jam">6</td>
                    <td class="waktu">11:01-11:45</td>
                    <td>B. INGGRIS</td>
                    <td>B. INDO</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>MTK</td>
                </tr>
                <tr>
                <td class="jam">na</td>
                    <td class="waktu">11:46-12:15</td>
                    <th colspan="5"  class="istirahat">ISTIRAHAT</th>
                </tr>
                <tr>
                    <td class="jam">7</td>
                    <td class="waktu">12:16-13:00</td>
                    <td>BD</td>
                    <td>B. INDO</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>BERIBADAH</td>
                </tr>
                <tr>
                    <td class="jam">8</td>
                    <td class="waktu">13:01-13:45</td>
                    <td>BD</td>
                    <td>PAIBP</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>PKK</td>
                </tr>
                <tr>
                    <td class="jam">9</td>
                    <td class="waktu">13:46-14:30</td>
                    <td>BD</td>
                    <td>PAIBP</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>PKK</td>
                </tr>
                <tr>
                    <td class="jam">10</td>
                    <td class="waktu">14:31-15:15</td>
                    <td>BD</td>
                    <td>PAIBP</td>
                    <td>PWPB</td>
                    <td>PBO</td>
                    <td>PKK</td>
                </tr>
           </tbody>
       </table>
   </center>

    <a id="piket"></a>
    <br><br><br><br><br>
    <p class="teks01">Jadwal Piket</p>
    <br><br><br><br>

   <center>
       <table class="jdw-piket"  border="2px">
           <thead>
               <td class="senin">Senin</td>
               <td>Selasa</td>
               <td>Rabu</td>
               <td>Kamis</td>
               <td>Jumat</td>
           </thead>
           <tbody>
                <tr>
                    <td>Achmad Baihaqi</td>
                    <td>Amalia Devi F</td>
                    <td>David Aldian H</td>
                    <td>Elok Fadia M</td>
                    <td>Ilham Maulana</td>
                </tr>
                <tr class="activeRow">
                    <td>Ade Raihan M</td>
                    <td>Ananta Eka P</td>
                    <td>Deky Reza S</td>
                    <td>Fahrezian Arya B</td>
                    <td>Inna Fatahna</td>
                </tr>
                <tr>
                    <td>Adelia Puteri G.N.S</td>
                    <td>Aning Rahma A</td>
                    <td>Dhinno Haryasena</td>
                    <td>Fatur Riandy</td>
                    <td>Julia Sabrina</td>
                </tr>
                <tr class="activeRow">
                    <td>Adetya Wardani</td>
                    <td>Arahma Handayani</td>
                    <td>Didin Rakfil B</td>
                    <td>Fitri Nur F</td>
                    <td>Kristina Apriliya</td>
                </tr>
                <tr>
                    <td>Agung Tri L</td>
                    <td>Bella Alfyo A</td>
                    <td>Disma Eka N</td>
                    <td>Halim Bagus P</td>
                    <td>M. Arifin Mustofa</td>
                </tr>
                <tr class="activeRow"> 
                    <td>Ahmad Ansori</td>
                    <td>Cantika Dea M</td>
                    <td>Diva Sabrina</td>
                    <td>Ichsan Wahyu R</td>
                    <td>M. Nur Kholis C.E.Y</td>
                </tr>
                <tr>
                    <td>Ahmad Rozikul</td>
                    <td>Cindy Qaula A</td>
                    <td>Dwi Windarti</td>
                    <td>Ike Handayani</td>
                    <td>Mar Atunnufita S</td>
                </tr>
           </tbody>
       </table>
   </center>

    <a id="siswa"></a>
    <br><br><br><br><br>
    <p class="teks01">Daftar Siswa</p>
    <br><br><br><br>

    <!-- tester search bar -->

        <center>
            <form action="" method="post">
                <label style="color: #18dd11; font-size: 25px; font-family: fantasy;" for="keyword">Cari Siswa : </label>
                <input type="text" name="keyword" autocomplete="off" placeholder="cari dgn nama/nis/alamat/ttl" >
                <button type="submit" name="cari" >Cari</button>
        </form>
        </center>
    
    <br>
    <center>
    <table class="tbl-siswa" border="2px solid #dd">
        <tr>
            <th width="2%">No</th>
            <th width="6%">Foto</th>
            <th width="9%">Nis</th>
            <th width="21%">Nama</th>
            <th width="6%">Gender</th>
            <th width="20%">Alamat</th>
            <th width="25%">Ttl</th>
            <th width="6%">view</th>
        </tr>
        
        <?php $no = 1; ?>
        <?php foreach( $siswa as $row ) : ?>

            <tr>
                <td> <?php echo $no; ?></td>
                <td><img src="..\dbase\foto\<?php echo $row["foto"];  ?>" alt="foto"></td>
                <td> <?php echo $row["nis"]; ?></td>
                <td> <?php echo $row["nama"]; ?></td>
                <td> <?php echo $row["gender"]; ?> </td>
                <td> <?php echo $row["alamat"]; ?></td>
                <td> <?php echo $row["ttl"]; ?></td>
                <td><a href="view.php?nis=<?php echo $row["nis"]; ?>">view</a></td>
            </tr>

        <?php $no++; ?>
        <?php endforeach; ?>    


    </table>
    </center>
 
        <br>
        <p style="text-indent: 3%; font-size: 18px; color: black; font-weight: bold; font-size: 18px;">Menampilkan hasil <?php echo $no-1 ?> siswa dari 36 siswa yang mengandung keyword : <b style="color: red; font-size: 18px; text-weight: none;">"<?php echo $key ?>" </b></p>

        <br><br><br><br><br>
        <!-- <center><h1 class="thaks">Terima Kasih Telah Berkunjung</h1></center>
        <br><br><br><br><br><br><br> -->
        
        <div class="footer">
			<div class="inner-footer">

				<div class="footer-item">
					<h1 class="h1-footer">Smkn 1 Kertosono</h1>
					<p>
						Smk Negeri 1 Kertosono adalah salah satu sekolah menegah kejuruaan yang berada di Provinsi Jawa Timur. 
						Tepatnya di JL. Langsep No.24, Desa Pelem, Kertosono, Kabupaten Ngajuk, Jawa Timur 64314.
						Smk Negeri 1 Kertosono memiliki 6 Kompetensi keahlian antara lain : Teknik Pemesinan, Teknik Instalasi Tenaga Listrik, Tata Boga, Tata Busana, dan Rekaasa Perangkat Lunak. <br><br>
					</p>
					<h1 class="h1-footer">Kontak Kami</h1>
					<p>
						Tata Usaha Smk Negeri 1 Kertosono (0358) 551466 Kode pos 64314, Email : TU@smkn11kts.sch.id, smkn_1_kertosono@yahoo.co.id Web : smkn1kts.sch.id Senin-Jumat, 07:00 WIB - 16:00 WIB Smk Negeri 1 Kertosono.
					</p>
				</div>
			</div>

			<div class="footer-bottom">
				Copyright&copy; Achmad Baihaqi 2020. Xi-Rpl 1.
			</div>	

		</div>

        <!-- #3427df #170098 ##0b0168-->
</body>
</html>