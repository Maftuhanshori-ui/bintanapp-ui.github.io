<title>Print Report</title>
<?php
include 'inc/config.php';
?>
<style type="text/css">
    .right {
        text-align: right;
    }

    .left {
        text-align: left;
    }

    .theadsatu {
        background-color: yellow;
    }

    .tinggi {
        height: 100px;
    }
</style>

<div class="row col-md-12">
    <div class="right">
        <span><b>Confidential - When Filled</b></span><br>
        <span>DUTY MANAGER’S REPORT</span>
    </div>
    <h1>BINTAN</h1>
    <div>
        <p>Duty Manager : Dennis Torio</p>
        <p>Date of Duty : 16 – 22 Nov 2020</p>
    </div>






    <div>
        <p>I have reported to GM (Ops) / Duty GM to received duties Manager’s kit together with the
            following assigned task and instructions: </p>
    </div>

    <table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr class="theadsatu">
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
                echo "
                </td>
            </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
    </br>
    <!-- /.duty personel -->
    <div>
        <p><u>Duty Personnel</u> – that have contacted DM on the commencement of duty, as follows:</p>

    </div>
    <table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr class="theadsatu">

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
                echo "
                </td>
            </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    </br>
    <!-- /.inspections -->
    <div>
        <p><u>Inspections & Spot Checks</u></p>

    </div>

    <table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr class="theadsatu">
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
                echo "
                </td>
            </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>

    </br>
    <!-- /.vehicles -->
    <div>
        <p><u>BRC vehicles leaving Lagoi</u> – requested by staff:</p>
    </div>
    <table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr class="theadsatu">
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
                echo "
                </td>
            </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>


    </br>
    <!-- /.visitors -->
    <div>
        <p><u> Visitors: </u></p>
    </div>
    <table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr class="theadsatu">
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
                echo "
                </td>
            </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <table id="table" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr>

            </tr>
        </thead>
    </table>
    <p>Name (DM): Dennis Torio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date: 23 Nov 2020</p>

    <table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
        <thead>
            <tr class="tinggi">
                <td> Mohamed Anwar CFSO </td>
                <td> Duty GM </td>
                <td> Prakash Nair GM Ops </td>
                <td> Abdul Wahab GGM </td>
            </tr>
        </thead>
    </table>
    <script type="text/javascript">
        window.print();
    </script>