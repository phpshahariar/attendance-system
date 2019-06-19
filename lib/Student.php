
<?php include_once ('Database.php');?>

<?php

class Student
{
	private $db;

	public function __construct()
	{
		 $this->db = new Database();
	}

 public function getStudent(){

 	$query = "SELECT * FROM tbl_student";
 	$result = $this->db->select($query);
 	return $result;

 }

 public function insertStudent($name, $roll){
	    $name = mysqli_real_escape_string($this->db->link,$name);
	    $roll = mysqli_real_escape_string($this->db->link,$roll);
	    if (empty($name) || empty($roll)){
	        $msg = "<div class='alert alert-danger'><strong>Error ! </strong> Filed must not be empty</div>";
	        return $msg;
        }else{
	        $stu_query = "INSERT INTO tbl_student(name,roll) VALUES('$name', '$roll')";
	        $stu_insert = $this->db->insert($stu_query);

            $stu_query = "INSERT INTO tbl_attend(roll) VALUES('$roll')";
            $stu_insert = $this->db->insert($stu_query);

            if ($stu_insert){
                $msg = "<div class='alert alert-success'><strong>Success ! </strong> Add Successfully</div>";
                return $msg;
            }else{
                $msg = "<div class='alert alert-danger'><strong>Error ! </strong> Not Add</div>";
                return $msg;
            }
        }

 }



}

?>