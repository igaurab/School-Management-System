<?php 
include '../functions.php';
$db_name = "school";
$db  = connect($db_name);
$maxBookLimit = 3;
/*function is_ajax_request(){
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
			$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}
*/
$studentClass = $_POST['studentClass'];
$studentRollNo = $_POST['studentRollNo'];
$bookName = $_POST['bookName'];

//SELECT * FROM students INNER JOIN ukg on students.id = ukg.id
$sql = "SELECT *  FROM `students` INNER JOIN `{$studentClass}` on students.id = {$studentClass}.id WHERE 
		{$studentClass}.roll_no = '$studentRollNo';
		";
		
$query = mysqli_query($db,$sql);
if($row = mysqli_fetch_assoc($query))
{	
	$bookcount = $row["bookcount"];
	$sutdentId = $row["id"];
	$prevBooks = $row["books"];

 	if($row["bookcount"] >= $maxBookLimit){
 		echo "Maximum Book Limit!";
 	}
 	else{
 		$bookcount += 1;
 		$bookName = $prevBooks . "," .$bookName ;
 		$sql = "UPDATE `students` SET `books` = '$bookName' , `bookcount` = '$bookcount' WHERE `id`='$sutdentId';
		";
		$updateQuery = mysqli_query($db,$sql);
		echo "Borrow Successful!!";
 	}
}
