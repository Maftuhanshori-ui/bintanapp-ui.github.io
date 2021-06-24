<div class="panel panel-default">
    <div class="panel-body">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-pencil"></i>&nbsp;
                Edit Duty Personnel
            </h4>
        </div>

        <?php

        if (isset($_GET['id_duty_personnel'])) {
            $id_duty_personnel  = $_GET['id_duty_personnel'];
            $query = mysqli_query($connect, "SELECT * FROM duty_personnel WHERE id_duty_personnel='$id_duty_personnel'") or die('Query Error : ' . mysqli_error($connect));
            while ($data  = mysqli_fetch_assoc($query)) {

                @$designation    = $data['designation'];
                @$name1  = $data['name1'];
                @$contact_no   = $data['contact_no'];
                @$time1  = $data['time1'];
                @$location_of_dp    = $data['location_of_dp'];
            }
        }
        ?>

        <form class="form-horizontal" action="" method="POST" id="createMemberForm">

            <div class="modal-body">
                <div class="messages"></div>

                <div class="form-group">
                    <!--/here teh addclass has-error will appear -->
                    <label for="name" class="col-sm-2 control-label">Designation</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="designation" value="<?php echo $designation ?>">
                        <!-- here the text will apper  -->
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="name1" value="<?php echo $name1 ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Contact No</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="contact_no" value="<?php echo $contact_no ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Time (hrs)</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="contact" name="time1" value="<?php echo $time1 ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact" class="col-sm-2 control-label">Location of DP</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="contact" name="location_of_dp" value="<?php echo $location_of_dp ?>">
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


        @$designation   = $_POST['designation'];
        @$name1  = $_POST['name1'];
        @$contact_no  = $_POST['contact_no'];
        @$time1  = $_POST['time1'];
        @$location_of_dp  = $_POST['location_of_dp'];


        $query = mysqli_query($connect, "UPDATE duty_personnel SET designation   		= '$designation   ',
                                                                name1 = '$name1',
                                                                contact_no = '$contact_no',
                                                                time1 = '$time1',
                                                                location_of_dp = '$location_of_dp'
																
												  			WHERE id_duty_personnel			= '$id_duty_personnel'");

        if ($query) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Di Ubah");
                window.location.href = "?page=duty_personnel &alert=3";
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