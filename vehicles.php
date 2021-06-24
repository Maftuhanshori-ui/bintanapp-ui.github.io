<!DOCTYPE html>
<html lang="en">

<!-- Include Head START -->
<?php include('inc/head.php'); ?>
<!-- Include Head END -->

<?php
include 'inc/config.php';
session_start();
?>

<body class="hold-transition skin-blue sidebar-mini">

    <!-- Wrapper START -->
    <div class="wrapper">

        <!-- Header START -->
        <header class="main-header">

            <!-- Include MENU START -->
            <?php include('inc/menu.php'); ?>
            <!-- Include MENU END -->

        </header>
        <!-- Header END -->



        <!-- /.content -->
    </div>

    <section id="menu" class="menu">
        <div class="container">
            <?php
            if (isset($_POST['cari'])) {
                $cari = $_POST['cari'];
            } else {
                $cari = "";
            }
            if (isset($_GET['act'])) {
                if ($_GET['act'] == "tambah_vehicles") {
                    include 'tambah_vehicles.php';
                } elseif ($_GET['act'] == "edit_vehicles") {
                    include 'edit_vehicles.php';
                } elseif ($_GET['act'] == "hapus_vehicles") {
                    include 'hapus_vehicles.php';
                }
            } else {
            ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="section-title">
                                <h2>Data <span>BRC vehicles leaving Lagoi</span></h2>
                                <h4>requested by staff:</h4>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">

                                        <a class="btn btn-success" href="?page=vehicles&act=tambah_vehicles">Tambah
                                            <i class="glyphicon glyphicon-plus"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <?php
                            if (empty($_GET['alert'])) {
                                echo "";
                            } elseif ($_GET['alert'] == 1) {
                                echo "	<div class='alert alert-warning alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
						<strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
					</div>";
                            } elseif ($_GET['alert'] == 2) {
                                echo "	<div class='alert alert-success alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
						<strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data vehicles berhasil disimpan.
					</div>";
                            } elseif ($_GET['alert'] == 3) {
                                echo "	<div class='alert alert-info alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
						<strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data vehicles berhasil diubah.
					</div>";
                            } elseif ($_GET['alert'] == 4) {
                                echo "	<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
						<strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data vehicles berhasil dihapus.
					</div>";
                            }
                            ?>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="vehicles">
                                        <thead class="bg-teal">
                                            <tr>
                                                <th>Date</th>
                                                <th>Requested by</th>
                                                <th>Driver</th>
                                                <th>Persons Accompanying</th>
                                                <th>Purpose</th>
                                                <th>Vehicle No</th>
                                                <th>Authorized by</th>


                                                <th width="15%" style="vertical-align: middle;">Tindakan</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            $sql    = "SELECT * FROM vehicles";
                                            $query    = mysqli_query($connect, $sql);
                                            $no     = 1;
                                            while ($data = mysqli_fetch_array($query)) {



                                                echo " 	<tr>
											<td>$data[date_v]</td>
											<td>$data[requested]</td>
											<td>$data[driver]</td>
                                            <td>$data[persons_acc]</td>
                                            <td>$data[purpose]</td>
                                            <td>$data[vehicles_no]</td>
                                            <td>$data[author]</td>";

                                            ?>

                                                <td style="vertical-align: middle;">
                                                    <div class=''>
                                                        <a data-toggle='tooltip' data-placement='top' style='margin-right:5px' class='btn btn-info btn-sm' href='?page=vehicles&act=edit_vehicles&id_vehicles=<?php echo $data['id_vehicles']; ?>'>Edit
                                                            <i class='glyphicon-edit'></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-sm" href="hapus_vehicles.php?id_vehicles=<?php echo $data['id_vehicles']; ?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['id_vehicles']; ?>?');">Hapus
                                                            <i class="glyphicon-trash"></i>
                                                        </a>
                                                    </div>
                                                    <?php

                                                    ?>

                                                <?php
                                            }
                                                ?>
                                            <?php
                                            echo "
											</td>
										</tr>";
                                            $no++;
                                        }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

                ?>
        </div>
    </section>
    <!-- /.content-wrapper -->

    <!-- Footer START -->
    <?php include('inc/footer.php'); ?>
    <!-- Footer END -->

</body>

</html>
<!-- Body END -->