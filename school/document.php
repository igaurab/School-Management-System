<?php
session_start();
if (!(isset($_SESSION['document'])))
{
	if (!(isset($_POST['document'])))
		header("location:index.html");
	elseif ($_POST['name'] === 'document' && $_POST['password'] === 'doit')
	{
		$_SESSION['document'] = 'document';
		echo "<i class = 'good'>Successfully Logged In.......!!</i>";
	}
	else 
		header("location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navBar">
	<ul>
		<li><h3><a href="addStudent.php" target="frame">Add Student</a></h3></li>
		<li><h3><a href="noticeGenerate.html" target="frame"> Generate Notice</a></h3></li>
		<li><h3><a href="routineGenerate.php" target="frame">Generate Routine</a></h3></li>
		<li><h3><a href="markSheet.php" target="frame"> Generate Marks Sheet</a></h3></li>
		<li><h3><a href="Character.php" target="frame"> Generate Character Certificate</a></h3></li>
</nav>
<p class="frame">
<iframe name="frame" src="addStudent.php"></iframe>
</p>
</body>
</html>