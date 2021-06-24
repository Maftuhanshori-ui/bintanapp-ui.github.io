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
                if ($_GET['act'] == "tambah_visitors") {
                    include 'tambah_visitors.php';
                } elseif ($_GET['act'] == "edit_visitors") {
                    include 'edit_visitors.php';
                } elseif ($_GET['act'] == "hapus_visitors") {
                    include 'hapus_visitors.php';
                }
            } else {
            ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="section-title">
                                <h2>Data <span>VIP Visitors:</span></h2>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">

                                        <a class="btn btn-success" href="?page=visitors&act=tambah_visitors">Tambah
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
						<strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data visitors berhasil disimpan.
					</div>";
                            } elseif ($_GET['alert'] == 3) {
                                echo "	<div class='alert alert-info alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
						<strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data visitors berhasil diubah.
					</div>";
                            } elseif ($_GET['alert'] == 4) {
                                echo "	<div class='alert alert-danger alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
						</button>
						<strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data visitors berhasil dihapus.
					</div>";
                            }
                            ?>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="visitors">
                                        <thead class="bg-teal">
                                            <tr>
                                                <th>Name – Designation</th>
                                                <th>Nationality</th>
                                                <th>Arrival</th>
                                                <th>Departure</th>
                                                <th>Accommodation</th>
                                                <th>Remarks</th>


                                                <th width="15%" style="vertical-align: middle;">Tindakan</th>



                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            $sql    = "SELECT * FROM visitors";
                                            $query    = mysqli_query($connect, $sql);
                                            $no     = 1;
                                            while ($data = mysqli_fetch_array($query)) {



                                                echo " 	<tr>
											<td>$data[name_visitors]</td>
											<td>$data[nationality]</td>
											<td>$data[arrival]</td>
                                            <td>$data[departure]</td>
                                            <td>$data[accommodation]</td>
                                            <td>$data[remarks]</td>";

                                            ?>

                                                <td style="vertical-align: middle;">
                                                    <div class=''>
                                                        <a data-toggle='tooltip' data-placement='top' style='margin-right:5px' class='btn btn-info btn-sm' href='?page=visitors&act=edit_visitors&id_visitors=<?php echo $data['id_visitors']; ?>'>Edit
                                                            <i class='glyphicon-edit'></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-sm" href="hapus_visitors.php?id_visitors=<?php echo $data['id_visitors']; ?>" onclick="return confirm('Anda yakin ingin menghapus <?php echo $data['id_visitors']; ?>?');">Hapus
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