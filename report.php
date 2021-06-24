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
                if ($_GET['act'] == "assigned_tasks") {
                    include 'assigned_tasks.php';
                } elseif ($_GET['act'] == "duty_personnel") {
                    include 'duty_personnel.php';
                } elseif ($_GET['act'] == "inspections") {
                    include 'inspections.php';
                } elseif ($_GET['act'] == "vehicles") {
                    include 'vehicles.php';
                } elseif ($_GET['act'] == "visitors") {
                    include 'visitors.php';
                }
            } else {
            ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="section-title">
                                <h2>Print <span>All Report</span></h2>
                            </div>
                            </br>
                            <form class="form-horizontal form-label-left" method="post" action="print_report.php" target="_blank">
                                <!-- /.assigned_task -->
                                <div class="section-title">
                                    <h3>Data <span>Assigned Tasks / Instruction(s)</span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="assigned_tasks">
                                            <thead class="bg-teal">
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Assigned Tasks / Instruction(s) </th>
                                                    <th>From</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                $sql    = "SELECT * FROM ass_tasks";
                                                $query    = mysqli_query($connect, $sql);
                                                $no     = 1;
                                                while ($data = mysqli_fetch_array($query)) {



                                                    echo " 	<tr>
											<td>$data[id_assigned_tasks]</td>
											<td>$data[assigned_tasks]</td>
											<td>$data[from1]</td>";
                                                ?>



                                                <?php
                                                }
                                                ?>
                                                <?php
                                                echo "
											</td>
										</tr>";
                                                $no++;

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </br>
                                <!-- /.duty personel -->
                                <div class="section-title">
                                    <h3>Data <span>Duty Personnel</span></h3>
                                    <h4>that have contacted DM on the commencement of duty, as follows:</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="duty_personnel">
                                            <thead class="bg-teal">
                                                <tr>

                                                    <th>Designation</th>
                                                    <th>Name</th>
                                                    <th>Contact No</th>
                                                    <th>Time (hrs)</th>
                                                    <th>Location of DP</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                $sql    = "SELECT * FROM duty_personnel";
                                                $query    = mysqli_query($connect, $sql);
                                                $no     = 1;
                                                while ($data = mysqli_fetch_array($query)) {



                                                    echo " 	<tr>
											
											<td>$data[designation]</td>
											<td>$data[name1]</td>
                                            <td>$data[contact_no]</td>
                                            <td>$data[time1]</td>
                                            <td>$data[location_of_dp]</td>";

                                                ?>


                                                <?php
                                                }
                                                ?>
                                                <?php
                                                echo "
											</td>
										</tr>";
                                                $no++;

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </br>
                                <!-- /.inspections -->
                                <div class="section-title">
                                    <h3>Data <span>Inspections & Spot Checks</span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="inspections">
                                            <thead class="bg-teal">
                                                <tr>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                    <th>Time (hrs)</th>
                                                    <th>Person In-Charge</th>
                                                    <th>Check on</th>
                                                    <th>Comments and Observation</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php

                                                $sql    = "SELECT * FROM inspections";
                                                $query    = mysqli_query($connect, $sql);
                                                $no     = 1;
                                                while ($data = mysqli_fetch_array($query)) {



                                                    echo " 	<tr>
											
											<td>$data[location_in]</td>
											<td>$data[date_in]</td>
                                            <td>$data[time_in]</td>
                                            <td>$data[person_in]</td>
                                            <td>$data[check_on]</td>
                                            <td>$data[comment_in]</td>";

                                                ?>


                                                <?php
                                                }
                                                ?>
                                                <?php
                                                echo "
											</td>
										</tr>";
                                                $no++;

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </br>
                                <!-- /.vehicles -->
                                <div class="section-title">
                                    <h3>Data <span>BRC vehicles leaving Lagoi</span></h3>
                                    <h4>requested by staff:</h4>
                                </div>
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


                                                <?php
                                                }
                                                ?>
                                                <?php
                                                echo "
											</td>
										</tr>";
                                                $no++;

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </br>
                                <!-- /.visitors -->
                                <div class="section-title">
                                    <h3>Data <span>VIP Visitors:</span></h3>
                                </div>
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
                                </br>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-offset-3">
                                        <button type="submit" name="print" class="btn btn-success "><i class="fa fa-print"></i> Print All</button>
                                        <a href="report.php?page=report" class="btn btn-warning"><i class="fa fa-refresh"></i> Refresh</a>
                                    </div>
                                </div>
                            </form>
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