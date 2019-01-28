<?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.html'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");

$query = mysql_query("SELECT * FROM admin WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Sistem Informasi Yayasan Madinatus Salam </title>ss
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="../gambar/logo.jpg" />
</head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <?php
                Include('header.php');
            ?>
            <!-- end navbar-header -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <?php
            Include('menu.php');
        ?>
        <!-- end navbar side -->

        
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Santri</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Santri
                        </div>
                            <div class="panel-body">
                                <div class="col-md-8">
                                    <form enctype="multipart/form-data" class="form-horizontal" action="upload_santri.php" method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Nama Lengkap:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Jenis Kelamin :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jns_kelamin">
                                                <option value="">-Pilih Salah Satu-</option>
                                                <option value="Laki-Laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Tempat Lahir :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="tempat_lahir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Tanggal Lahir :</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="tanggal">
                                                <option value="">-pilih tanggal-</option>
                                               <?php for($hari=1; $hari<=31; $hari++){ ?>
                                                <option value="<?php echo $hari; ?>">
                                                    <?php echo $hari; ?>
                                                </option>
                                                <?php  } ?>
                                            </select>
                                            
                                            <select class="form-control" name="bulan">
                                                <option value="">-pilih bulan-</option>
                                                <?php
                                                    $bulan = array("Januari" , "Februari" , "Maret" , "April" , "Mei" , "Juni" , "Juli" , "Agustus" , "September" , "Oktober" , "Novermber" , "Desember");
                                                    foreach ($bulan as $newbulan) {
                                                    echo "<option value=$newbulan> $newbulan </option>";
                                                    }
                                                ?>
                                            </select>
                                            <select class="form-control" name="tahun">
                                                <option value="">-pilih tahun-</option>
                                                <?php
                                                    for($i=1900;$i<=2017;$i++){
                                                    echo "<option value=$i> $i </option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Alamat Rumah:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="alamat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">RT :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="rt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">RW :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="rw" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Desa :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="desa" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Kecamatan :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="kec" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Kabupaten :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="kab" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Provinsi :</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="provinsi" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Agama:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="agama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Kewarganegaraan:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="kewarganegaraan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Anak ke:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="anak_ke" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Jumlah Saudara Kandung:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="jml_sdr_kandung" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Jumlah Saudara Tiri:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="jml_sdr_tiri" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Jumlah Saudara Angkat:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="jml_sdr_angkat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Status Anak:</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="status_anak">
                                                <option value="">-Pilih Salah Satu-</option>
                                                <option value="Anak Yatim">Anak Yatim</option>
                                                <option value="Piatu">Piatu</option>
                                                <option value="Yatim Piatu">Yatim Piatu</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">Bahasa Sehari-hari:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="bahasa" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-4">No Handphone:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="no_hp" class="form-control">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="control-label col-sm-4" >Foto :</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="gambar">
                                        </div>
                                    </div>
                                    <div class="form-group">                                         
                                        <label class="control-label col-sm-4" >
                                            <input class="btn btn-primary" name="submit" type="submit" value="Tambah" />
                                        </label>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>
</html>
