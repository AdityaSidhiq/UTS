<html>
<head>
	<title>Calangeo</title>
	<style type="text/css">
		body{
			background: url('bunga.jpg');
		}

		/*Format untuk teks isi*/
		#textIsi{
			font-family: sans-serif;
		}

		/*Format untuk header di isi*/
		#header{
			font-family: sans-serif;
			color: #ed2064;
			font-size: 24px;
		}

		/*Format tabel utama*/
		.wrap{
			width: 920px;
			margin: auto;
		}

		.wrap .tabelLogo{
			background: pink;
			height: 200px;
			width: 300px;
			border-style: ridge;
			float: left;
		}

		/*Settingan foto*/
		img{
			display: block;
			margin: auto;
		}

		.wrap .tabelJudul{
			background: pink;
			height: 190px;
			width: 600px;
			border-style: ridge;
			float: left;
			padding-top: 10px;
		}

		.tanggal{
			font-size: 18px;
			font-family: sans-serif;
			font-style: italic;
			color: #ed2064;
			text-align: right;
			padding-right: 7px;
			padding-top: 7px;
		}

		.wrap .tabelList{
			background: pink;
			height: 600px;
			width: 280px;
			border-style: ridge;
			padding-left: 20px;
			float: left;
		}

		/*Settingan untuk tulisan link*/
		.link,
		.link:link{
			font-family: sans-serif;
			color: #ed2064;
		}
		.link:active{
			font-family: sans-serif;
			color: #ed2064;
		}
		.link:visited{
			font-family: sans-serif;
			color: #ed2064;
		}

		.tabelIsi{
			background: pink;
			height: 600px;
			width: 597px;
			border-style: ridge;
			float: left;
			padding-left: 3px;
		}

		.tulisan{
			font-family: sans-serif;
			color: #ed2064;
		}

	</style>
</head>
<body>
	<div class="wrap">
		<div class="tabelLogo">
			<p></p>
			<img src="love.png" width="170" height="160">
		</div>
	 

		<div class="tabelJudul">
			<img src="font.png" width="450" height="155">
			<div class="tanggal">
				<?php
					$tgl=date('l, d-m-Y'); /* Pemberian Tanggal secara otomatis*/
					echo $tgl;
				?>
			</div>
		</div>

		<!-- Kode untuk list -->
		<div class="tabelList">
			<ul>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=home">Home</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=pendaftaran">Pendaftaran</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=mengukurBeratBadanIdeal">Mengukur Berat Badan Ideal</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=menghitungKategoriUsia">Menghitung Kategori Usia</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=menghitungPersegiPanjang">Menghitung Persegi Panjang</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=menghitungSegitiga">Menghitung Segitiga</a></li>
				<hr>
				<li><a class="link" href="<?php $_SERVER['PHP_SELF']; ?>?op=daftarMahasiswa">Daftar Mahasiswa</a></li>
				<hr>
			</ul>
		</div>
		<div class="tabelIsi">
		
            <?php
            if (@$_GET['op'] == "home") /* Menampilkan halaman home*/
            {
            ?>
            
            <center>
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="tulisan">
            <h2>Assalamu'alaikum warahmatullahi wabarakatuh</h2>
            <table>
                <tr><td>Nama</td><td>:</td><td>Aditya Sidhiq Pratama</td></tr>
                <tr><td>NIM</td><td>:</td><td>11180910000032</td></tr>
                <tr><td>Prodi</td><td>:</td><td>Teknik Informatika (3B)</td></tr>
            </table>
            </div>
            </form>
        	</center>
            
            <?php
            }

            else if (@$_GET['op'] == "pendaftaran") /* Menampilkan halaman pendaftaran*/
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=pendaftaran">
            	<div class="tulisan">
            		<h2><center>Form Pendaftaran</center></h2>
            	<font color="black">
            	<table>
		           	<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="30"></td></tr>
	                <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat" size="30"></td></tr>
	                <tr><td>Tanggal Lahir</td><td>:</td><td><select name="tanggal">
	                	<!-- Kode untuk memberikan pilihan opsi -->
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      <select name="bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                      </select>
                      <select name="tahun">
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                      </select></td></tr>
	                <tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="2" cols="22"></textarea></td></tr>
	                <!-- Kode radio untuk memilih salah satu opsi-->
	                <tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex" value="Laki-laki">Laki-laki<input type="radio" name="sex" value="Perempuan">Perempuan</td></tr>
	                <tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="sekolah" size="30"></td></tr>
	                <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai" size="30"></td></tr>
		           	<tr><td></td><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Hapus">
	           	</table>
	           	</font>
	           	</div>
	        </form>

            <?php
            }

            else if (@$_GET['op'] == "mengukurBeratBadanIdeal") /* Menampilkan halaman Penghitung berat badan*/
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=mengukurBeratBadanIdeal">
            	<div class="tulisan">
            		<h2><center>Pengukur Berat Badan</center></h2>
            	<font color="black">
	            <table>
	                <tr><td>Masukkan Tinggi Badan Anda</td><td>:</td><td><input type="text" name="tb"></td><td>Cm</td></tr>
	                <tr><td>Masukkan Berat Badan Anda</td><td>:</td><td><input type="text" name="bb"></td><td>Kg</td></tr>
	                <tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
	            </table>
	            </font>
	           	</div>
            </form>

            <?php
            }
            
            else if (@$_GET['op'] == "menghitungKategoriUsia") /* Menampilkan halaman kategori usia*/
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=menghitungKategoriUsia">
            	<div class="tulisan">
            		<h2><center>Penentu Kategori Usia</center></h2>
            	<font color="black">
                <table>
                    <tr><td>Masukkan Usia Anda</td><td>:</td><td><input type="text" name="yo"></td><td>Tahun</td></tr>
                    <tr><td></td><td></td><td><input type="submit" name="Submit" value="Submit"></td></tr>
                </table>
                </font>
	           	</div>
            </form>

            <?php
            }

            else if (@$_GET['op'] == "menghitungPersegiPanjang") /* Menampilkan halaman Penghitung persegi*/
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=menghitungPersegiPanjang">
            	<div class="tulisan">
            		<h2><center>Penghitung Luas Persegi</center></h2>
            	<font color="black">
                <table>
	                <tr><td>Masukkan Panjang Persegi</td><td>:</td><td><input type="text" name="panjang"></td></tr>
	                <tr><td>Masukkan Lebar Persegi</td><td>:</td><td><input type="text" name="lebar"></td></tr>
	                <tr><td></td><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"> </td></tr>
                </table>
                </font>
	           	</div>

            </form>

            <?php
            }

            else if (@$_GET['op'] == "menghitungSegitiga") /* Menampilkan halaman Penghitung segitiga*/
            {
            ?>
             
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>?show=menghitungSegitiga">
            	<div class="tulisan">
            		<h2><center>Penghitung Luas Segitiga</center></h2>
            	<font color="black">
                <table>
                  <tr><td>Masukkan Alas Segitiga</td><td>:</td><td><input type="text" name="alas"></td></tr>
                  <tr><td>Masukkan Tinggi Segitiga</td><td>:</td><td><input type="text" name="tinggi"></td></tr>  
	              <tr><td></td><td></td><td><input type="submit" name="submit" value="Submit"><input type="reset" name="reset" value="Reset"> </td></tr>
                </table>
                </font>
	           	</div>
                
            </form>

            <?php
            }

            else if (@$_GET['op'] == "daftarMahasiswa") /* Menampilkan halaman daftar mahasiswa*/
            {
            ?>
             
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "universitas";
                $connection = mysqli_connect($servername, $username, $password, $dbname);
                if (!$connection){
                        die("Connection Failed:".mysqli_connect_error());
                    }
                $query = mysqli_query($connection,"SELECT * FROM mahasiswa"); /*Ini kodingan untuk manggil mysql*/
            ?>

            <form action="" method="post">
              	<div class="tulisan">
	           		<h2><center>Daftar Mahasiswa</center></h2>
		           	<font color="black">
		           	<center>
	                <table border="1" cellpadding="2" cellspacing="0"> <!-- Pengaturan tabel -->
	                    <tr>
	                        <th>NIM</th>
	                        <th>Nama</th>
	                        <th>Tempat Lahir</th>
	                        <th>Tanggal Lahir</th>
	                        <th>Jurusan</th>
	                        <th>IPK</th>
	                    </tr>
	                    <?php if(mysqli_num_rows($query)>0){ 
	                        $no = 1;
	                        while($data = mysqli_fetch_array($query)){
	                    ?>
	                    <tr> <!-- Untuk menampilkan yang ada di database -->
	                            <td><?php echo $data["nim"];?></td>
	                            <td><?php echo $data["nama"];?></td>
	                            <td><?php echo $data["tempat_lahir"];?></td>
	                            <td><?php echo $data["tanggal_lahir"];?></td>
	                            <td><?php echo $data["jurusan"];?></td>
	                            <td><?php echo $data["ipk"];?></td>
	                    </tr>
	                    <?php $no++; 
	                  	} 
	                   	}
	                    	?>
	                    </table>
		                </font>
		           	</div>
		           	</center>
                </form>
            
            <?php
            }

            if (@$_GET['show'] == "pendaftaran") /* Menampilkan halaman hasil input pendaftaran*/
            { 	
            	/*Fungsi untuk menyimpan data sementara di $*/
            	$namaLengkap = $_POST['nama'];  
                $tempatLahir = $_POST['tempat'];
                $tanggalLahir = $_POST['tanggal'];
                $bulanLahir = $_POST['bulan'];
                $tahunLahir = $_POST['tahun'];
                $alamatAnda = $_POST['alamat'];  
                $kelaminAnda = $_POST['sex']; 
                $asalSekolah = $_POST['sekolah'];
                $nilaiUAN = $_POST['nilai'];

                /* Setelah data disimpan di $, maka data ditampilkan seperti ini*/
                echo "<table id='textIsi'>";
                echo "<center><h2 id='header'>Form Pendaftaran</h2></center>";
                echo "<tr><td>Nama Lengkap</td><td>:</td><td>".$namaLengkap."</td></tr>";
                echo "<tr><td>Tempat Lahir</td><td>:</td><td>".$tempatLahir."</td></tr>";
                echo "<tr><td>Tanggal Lahir</td><td>:</td><td>".$tanggalLahir."-".$bulanLahir."-".$tahunLahir."</td></tr>";
                echo "<tr><td>Alamat Rumah</td><td>:</td><td>".$alamatAnda."</td></tr>";
                echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$kelaminAnda."</td></tr>";
                echo "<tr><td>Asal Sekolah</td><td>:</td><td>".$asalSekolah."</td></tr>";
                echo "<tr><td>Nilai UAN</td><td>:</td><td>".$nilaiUAN."</td></tr>";
                echo "<tr><td>Terimakasih Sudah Mengisi Form</tr></td>";
                echo "</table>";
            }elseif (@$_GET["show"] == "mengukurBeratBadanIdeal")/* Menampilkan halaman hasil input pengukuran berat badan*/ {
            	/*Fungsi untuk menyimpan data sementara di $*/
                $tinggi=$_POST['tb'];
                $berat=$_POST['bb'];
                $persen=($tinggi-100)*0.1;
                $ideal=($tinggi-100)-$persen;

                	/*Penentu dengan fungsi if*/
                    if($berat <= $ideal+2 && $berat >= $ideal-2)
                    {
                    	echo "<center><h2 id='header'>Pengukur Berat Badan</h2></center>";
                   	 	echo "<p id='textIsi'>Berat Badan Anda Ideal.</p>";
                    }else
                    {
                    	echo "<center><h2 id='header'>Pengukur Berat Badan</h2></center>";
                    	echo "<p id='textIsi'>Berat Badan Anda Tidak Ideal.</p>";
                    } 	

            }elseif (@$_GET["show"] == "menghitungKategoriUsia") /* Menampilkan halaman hasil input penghitung kategori usia*/ {
            	/*Fungsi untuk menyimpan data sementara di $*/
                $usia=$_POST['yo'];
                	/*Penentu dengan fungsi if*/
                    if($usia >= 0 && $usia <= 5.5)
                    {
                    	echo "<center><h2 id='header'>Penentu Kategori Usia</h2></center>";
                        echo "<p id='textIsi'>Status usia Anda: Balita.</p>";
                    }else if($usia > 5.5 && $usia <= 16.5)
                    {
                    	echo "<center><h2 id='header'>Penentu Kategori Usia</h2></center>";
                        echo "<p id='textIsi'>Status usia Anda: Anak-anak.</p>";
                    }else if($usia > 16.5 && $usia <= 50.5)
                    {
                    	echo "<center><h2 id='header'>Penentu Kategori Usia</h2></center>";
                        echo "<p id='textIsi'>Status usia Anda: Dewasa.</p>";
                    }else if($usia > 50.5)
                    {
                    	echo "<center><h2 id='header'>Penentu Kategori Usia</h2></center>";
                        echo "<p id='textIsi'>Status usia Anda: Tua.</p>";
                    }else
                    {
                    	echo "<center><h2 id='header'>Penentu Kategori Usia</h2></center>";
                        echo "<p id='textIsi'>Anda belom lahir.</p>";
                    }
            
            }elseif (@$_GET["show"] == "menghitungPersegiPanjang") /* Menampilkan halaman hasil input penghitung luas persegi*/ {
            	/*Fungsi untuk menyimpan data sementara di fungsi yang memiliki $*/
                function luas_persegiPanjang($panjang,$lebar)
                {
                	/*rumus*/
                  	$hasil = $panjang*$lebar;
	                /* Setelah data disimpan di $, maka data ditampilkan seperti ini*/
                 	 echo "<center><h2 id='header'>Penghitung Luas Persegi</h2></center>";
                 	 echo "<p id='textIsi'>Panjang Persegi Panjang adalah <b>".$panjang."</b></p>";
                 	 echo "<p id='textIsi'>Lebar Persegi Panjang adalah <b>".$lebar."</b></p>";
                 	 echo "<p id='textIsi'>Luas Persegi Panjang adalah <b>".$hasil."</b></p>";
                }
                  $panjang = $_POST['panjang'];
                  $lebar = $_POST['lebar'];
                  luas_persegiPanjang($panjang, $lebar);

            }elseif (@$_GET["show"] == "menghitungSegitiga") /* Menampilkan halaman hasil input penghitung luas segitiga*/ {
            	/*Fungsi untuk menyimpan data sementara di fungsi yang memiliki $*/
                function luas_segitiga($alas,$tinggi)
                {
                	/*rumus*/
	                $hasil = ($alas/2)*$tinggi;
	                /* Setelah data disimpan di $, maka data ditampilkan seperti ini*/
	                echo "<center><h2 id='header'>Penghitung Luas Segitiga</h2></center>";
	                echo "<p id='textIsi'>Panjang Alas Segitiga adalah <b>".$alas."</b></p>";
	                echo "<p id='textIsi'>Tinggi Segitiga adalah <b>".$tinggi."</b></p>";
	                echo "<p id='textIsi'>Luas Segitiga adalah <b>".$hasil."</b></p>";
                }
                  $alas = $_POST['alas'];
                  $tinggi = $_POST['tinggi'];
                  luas_segitiga($alas, $tinggi);
            }
            ?>

		</div>
	</div>
</body>
</html>