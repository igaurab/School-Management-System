<?php 
include '../functions.php';
$db_name = "school";
$db  = connect($db_name);
$maxBookSize = 3;
/*function is_ajax_request(){
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
			$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
*/
$studentClass = $_POST['studentClass'];
$studentRollNo = $_POST['studentRollNo'];

$sql = "SELECT *  FROM `students` INNER JOIN `{$studentClass}` on students.id = {$studentClass}.id WHERE 
		{$studentClass}.roll_no = '$studentRollNo';
		";
		
$query = mysqli_query($db,$sql);
if($row = mysqli_fetch_assoc($query))
{	
	$bookcount = $row["bookcount"];
	$sutdentId = $row["id"];
	$prevBooks = $row["books"];

	$books = explode("," , $prevBooks);
	
	echo "<b>Student Name:</b> ";
	echo $row["name"];
	echo "<br>Books Taken: ";
	echo $row["bookcount"];
	for($i=1; $i<=$row["bookcount"]; $i++){
		echo "<br>";
		echo $i;
		echo ". ";
		echo $books[$i];
	}

}
