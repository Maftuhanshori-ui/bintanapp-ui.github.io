<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-pencil"></i>&nbsp;
                Edit Inspections & Spot Checks
            </h4>
        </div>

        <?php

        if (isset($_GET['id_inspections'])) {
            $id_inspections  = $_GET['id_inspections'];
            $query = mysqli_query($connect, "SELECT * FROM inspections WHERE id_inspections='$id_inspections'") or die('Query Error : ' . mysqli_error($connect));
            while ($data  = mysqli_fetch_assoc($query)) {

                @$location_in    = $data['location_in'];
                @$date_in  = $data['date_in'];
                @$time_in   = $data['time_in'];
                @$person_in   = $data['person_in'];
                @$check_on  = $data['check_on'];
                @$comment_in    = $data['comment_in'];
            }
        }
        ?>

        <form class="form-horizontal" action="" method="POST" id="createMemberForm">

            <div class="modal-body">
                <div class="messages"></div>

                <div class="form-group">
                    <!--/here teh addclass has-error will appear -->
                    <label for="name" class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="location_in" value="<?php echo $location_in ?>">
                        <!-- here the text will apper  -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="contact" name="date_in" value="<?php echo $date_in ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Time (hrs)</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" name="time_in" value="<?php echo $time_in ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label"> Person In-Charge</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="person_in" value="<?php echo $person_in ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Check On</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="check_on" value="<?php echo $check_on ?>">
                    </div>

                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Comments and Observation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="comment_in" value="<?php echo $comment_in ?>">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="update" class="btn btn-success " value="Update">
                <button type="reset" class="btn btn-danger" onclick="window.history.back();">Batal</button>
            </div>
        </form>
    </div>
</div><!-- /.modal-content -->

<?php

include "inc/config.php";
if (isset($_POST['update'])) {
    if (isset($_POST['update'])) {


        @$location_in   = $_POST['location_in'];
        @$date_in  = $_POST['date_in'];
        @$time_in  = $_POST['time_in'];
        @$person_in  = $_POST['person_in'];
        @$check_on  = $_POST['check_on'];
        @$comment_in  = $_POST['comment_in'];

        $query = mysqli_query($connect, "UPDATE inspections SET location_in   		= '$location_in   ',
                                                                date_in = '$date_in',
                                                                time_in = '$time_in',
                                                                person_in = '$person_in',
                                                                check_on = '$check_on',
                                                                comment_in = '$comment_in'
																
												  			WHERE id_inspections			= '$id_inspections'");

        if ($query) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Di Ubah");
                window.location.href = "?page=inspections &alert=3";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Data Gagal Di Ubah");
            </script>
<?php
        }
    }
}
?>