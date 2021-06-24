<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h4>
				<i class="glyphicon glyphicon-pencil"></i>&nbsp;
				Edit Assigned Tasks / Instruction(s)
			</h4>
		</div>

		<?php

		if (isset($_GET['id_assigned_tasks'])) {
			$id_assigned_tasks  = $_GET['id_assigned_tasks'];
			$query = mysqli_query($connect, "SELECT * FROM ass_tasks WHERE id_assigned_tasks='$id_assigned_tasks'") or die('Query Error : ' . mysqli_error($connect));
			while ($data  = mysqli_fetch_assoc($query)) {

				@$assigned_tasks    = $data['assigned_tasks'];
				@$from1  = $data['from1'];
			}
		}
		?>

		<form class="form-horizontal" action="" method="POST" id="createMemberForm">

			<div class="modal-body">
				<div class="messages"></div>

				<div class="form-group">
					<!--/here teh addclass has-error will appear -->
					<label for="name" class="col-sm-2 control-label">Assigned Tasks / Instruction(s)</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="name" name="assigned_tasks" value="<?php echo $assigned_tasks ?>">
						<!-- here the text will apper  -->
					</div>
				</div>
				<div class="form-group">
					<label for="contact" class="col-sm-2 control-label">From</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="contact" name="from1" value="<?php echo $from1 ?>">
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

		@$assigned_tasks      = $_POST['assigned_tasks'];
		@$from1    = $_POST['from1'];


		$query = mysqli_query($connect, "UPDATE ass_tasks SET assigned_tasks   		= '$assigned_tasks  ',
																from1 	= '$from1 '
												  			WHERE id_assigned_tasks 			= '$id_assigned_tasks'");

		if ($query) {
?>
			<script type="text/javascript">
				alert("Data Berhasil Di Ubah");
				window.location.href = "?page=assigned_tasks &alert=3";
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