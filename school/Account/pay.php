<?php
	session_start();
	include '../functions.php';
    $db_name = "school";
    $db  = connect($db_name);
    //Update the Bills
	if(isset($_POST['pay'])){
		header('Location:index.php');
	}

	$amount = $_POST['amount'];
	$id = $_SESSION['id'];
	$prevBalance = $_SESSION['total'];
	if($prevBalance!=0 and $amount<=$prevBalance)
	{
		$nowBalance =  $prevBalance - $amount;
		$sql = "UPDATE `account_status` SET balance = '$nowBalance' WHERE studentId = '$id'";
		$query = mysqli_query($db,$sql);
	}
	$studentClass = $_SESSION['class']  ;
	$studentRollNo = $_SESSION['roll']  ;
?>
<form name='fr' action='search.php' method='POST'>
<input type='hidden' name='studentClass' value='<?php echo $studentClass?>'>
<input type='hidden' name='studentRollNo' value='<?php echo $studentRollNo?>'>
</form>
<script type='text/javascript'>
document.fr.submit();
</script>

	
