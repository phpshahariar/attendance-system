
<?php 
	include("inc/header.php");
	include("lib/Student.php");
?>

<?php 
	$stu = new Student();
	$date = date('Y-m-d');
?>

	<div class="card">
		<div class="card-footer">
			<h2>
				<a class="btn btn-success" href="add.php">Add Student</a>
				<a class="btn btn-info pull-right" href="">View Student</a>
			</h2>
		</div>
	<div class="card-body">
	<div class="card-header text-center" style="font-size: 24px;">
		<strong>Date : </strong><?php  echo $date; ?>
	</div>
	<br>
	<form action="" method="POST">
		<table class="table table-striped">
			<tr>
				<th width="25%">Serial No</th>
				<th width="25%">Student Name</th>
				<th width="25%">Student Roll</th>
				<th width="25%">Attendance</th>
			</tr>
			<?php
                $get_student = $stu->getStudent();

                if ($get_student) {
                    $i = 0;
                    while ($value = $get_student->fetch_assoc()) {
                        $i++;

			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td><?php echo $value['roll']; ?></td>
				<td>
					<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="present"> P
					<input type="radio" name="attend[<?php echo $value['roll']; ?>]" value="absent"> A
				</td>
			</tr>

		<?php } } ?>

		</table>
			<tr>
				<td>
					<input type="submit" name="btn" class="btn btn-primary" value="SubmiT">
				</td>
			</tr>
	</form>
</div>
</div>

<?php include("inc/footer.php");?>