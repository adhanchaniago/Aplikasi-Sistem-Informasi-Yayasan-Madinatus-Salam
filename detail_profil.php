<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Sistem Informasi | Yayasan Madinatus Salam</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">
  <link rel="icon" type="image/png" href="gambar/logo.jpg" />
  
  <!-- Pemanggilan CSS -->
  <?php
	include ('link_css.php');
  ?>
</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <?php
		include ('top_bar.php');
	  ?>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" style="background: black">
		<div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">Sistem Informasi Yayasan Madinatus Salam
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">BERANDA</a>
              </li>
              <li>
                <a class="active" href="profil.php">PROFIL</a>
              </li>
              <li>
                <a href="artikel.php">ARTIKEL</a>
              </li>
              <li>
                <a href="program.php">PROGRAM</a>
              </li>
              <li>
                <a href="galeri.php">GALERI</a>
              </li>
      			  <li>
      				  <a href="contact.php">KONTAK KAMI</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
      </div>

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->
	
	

	 <!-- Start Team Member Section -->
    <div class="section" style="background:#fff;">
      <div class="container">
		  <div class="col-md-8">

			<!-- Start Big Heading -->
			<div class="" data-animation="fadeInDown" data-animation-delay="01">
      <?php 
        include("koneksi.php");
        $id=$_GET['id'];
        $sql=mysql_query("select * from profil where id_profil=$id") or die(mysql_error());
        while($row=mysql_fetch_array($sql))
        {
        ?>
			  <h3><?php echo $row['nama_profil']?></h3>
        <br>
         <?php echo "<img src='admin/galeri/.$row[3]' class='img-responsive' width='300' height='300'><br>"; ?>
			</div>
			<!-- End Big Heading -->

			<!-- Some Text -->
       <?php echo $row['isi']?>
        <?php
        }
      ?>
      </div>
		  

		  <div class="col-md-4">

            <!-- Classic Heading -->
            <h4><span>Biodata Yayasan</span></h4>

            <!-- Start Testimonials Carousel -->
            <ul class="icons-list">
            <?php 
            include("koneksi.php");
            $sql=mysql_query("select * from kontak") or die(mysql_error());
            while($row=mysql_fetch_array($sql))
            {
              ?>
              <li><strong>Nama Yayasan:</strong> Yayasan Madinatus Salam</li>
              <li><strong>Alamat:</strong> <?php echo $row['alamat']?></li>
              <li><strong>Desa:</strong> Cinunuk </li>
              <li><strong>Kecamatan:</strong> Cileunyi </li>
              <li><strong>Kabupaten:</strong> Bandung </li>
              <li><strong>Provinsi:</strong> Jawa Barat </li>
              <li><strong>Negara:</strong> Indonesia </li>
              <li><strong>Email:</strong> <?php echo $row['email']?></li>
              <li><strong>Telepon:</strong> <?php echo $row['no_telp']?></li>
              <li><strong>HP:</strong> 0857 2290 9574</li>
              <?php
            }
            ?>
            </ul>
			</div>
		</div>
    </div>

    <!-- Start Footer Section -->
    <footer>
      <?php
		include('footer.php');
	  ?>
    </footer>
    <!-- End Footer Section -->


  </div>
  <!-- End Full Body Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>Pilih Menu</span>
    <ul class="">
      <li>
        <a href="index.php">BERANDA</a>
      </li>
      <li>
        <a href="profil.php">PROFIL</a>
      </li>
      <li>
        <a href="#">BERITA</a>
      </li>
      <li>
        <a class="active"  href="program.php">PROGRAM</a>
      </li>
      <li>
        <a href="contact.php">KONTAK KAMI</a>
      </li>
    </ul>

    <span>12 Warna Skin</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Warna Baris Atas</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Warna Background</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>