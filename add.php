
<?php include("inc/header.php");?>
<?php include("lib/Student.php");?>

<?php
    $stu = new Student();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $insertdata = $stu->insertStudent($name, $roll);
    }
?>

<?php
    if (isset($insertdata)){
        echo $insertdata;
    }
?>

	<div class="card">
		<div class="card-footer">
			<h2>
				<a class="btn btn-success" href="add.php">Add Student</a>
				<a class="btn btn-info" href="index.php">Back</a>
			</h2>
		</div>
	<div class="card-body">
	<br>
	<form action="" method="POST">
		<div class="form-group">
			<label>Student Name</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label>Student Roll</label>
			<input type="number" class="form-control" name="roll">
		</div>
		<div class="form-group">
			<input type="submit" name="btn" class="btn btn-primary" value="Add Student">
		</div>
	</form>
</div>
</div>

<?php include("inc/footer.php");?>