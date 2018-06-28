<?php

require 'functions.php';

if (isset($_POST['newStudent']))
{
	$db = connect("school");
	$name = htmlspecialchars($_POST['studentName']);
	$gender = htmlspecialchars($_POST['gender']);
	$fName = htmlspecialchars($_POST['fatherName']);
	$mName = htmlspecialchars($_POST['motherName']);
	$dob = htmlspecialchars($_POST['DOB']);
	$grade = htmlspecialchars($_POST['grade']);
	$contact = htmlspecialchars($_POST['contact']);
	if (!empty($_POST['anotherNum']))
		$contact = $contact.'/'.htmlspecialchars($_POST['anotherNum']);
	$district = htmlspecialchars($_POST['District']);
	$Ward = htmlspecialchars($_POST['Ward']);
	$tempAddress = htmlspecialchars($_POST['tempAddress']);
	$date = date("Y-m-d");
	$id;
	$pass = htmlspecialchars($_POST['pass']);
	$pass;
	if ($_POST['vdcOrMuni'] == "VDC")
	{
		$vdc = htmlspecialchars($_POST['VDC']);
		$sql_string = "INSERT INTO students (name,fatherName,motherName,DOB,Grade,dateOfAdmission,contact,Gender,addressTemp,District,VDC,Ward,password) 
									VALUES ('$name','$fName','$mName','$dob','$grade','$date','$contact','$gender','$tempAddress','$district','$vdc','$Ward','$pass')";
	}
	else
	{ 
		$muni = $_POST['VDC'];
		$sql_string = "INSERT INTO students (name,fatherName,motherName,DOB,Grade,dateOfAdmission,contact,Gender,addressTemp,District,Municipality,Ward,password) 
									VALUES ('$name','$fName','$mName','$dob','$grade','$date','$contact','$gender','$tempAddress','$district','$muni','$Ward','$pass')";
	}
	$dat = mysqli_query($db,$sql_string);
	$sql = "SELECT id FROM students WHERE name = '$name' AND grade = '$grade' AND DOB = '$dob'";
	$exe = mysqli_query($db,$sql);
		if ($val = mysqli_fetch_assoc($exe))
			$id = $val['id'];
		else
			die ('can\'t set unique id');
	
		if ($dat)
			header("location:addStudent.php?ok&pass=".$pass."&id=".$id);
		else
			die ("Cannot add Student");
	
		if ($grade == 'Nursery')
		{
			$sql = "INSERT INTO nursery (name,id) VALUES ('$name','$id')";
			if (!(mysqli_query($db,$sql)))
				die('Sorry Failed to Add...');
			else
			{
				
				$sql = "SELECT name FROM nursery ORDER BY name ASC";
				$exe = mysqli_query($db,$sql);
				$i = 0;
			while ($data = mysqli_fetch_assoc($exe))
				{
					$i++;
					$name = $data['name'];
					$string = "UPDATE nursery SET roll_no = '$i' WHERE name = '$name'";
					mysqli_query($db,$string);
				}

			}

		}
		elseif ($grade == 'L.K.G.')
		{ 
			$sql = "INSERT INTO lkg (name,id) VALUES ('$name','$id')";
			if (!(mysqli_query($db,$sql)))
			die('Sorry Failed to Add...');
			else
			{
				
				$sql = "SELECT name FROM lkg ORDER BY name ASC";
				$exe = mysqli_query($db,$sql);
				$i = 0;
			while ($data = mysqli_fetch_assoc($exe))
				{
					$i++;
					$name = $data['name'];
					$string = "UPDATE lkg SET roll_no = '$i' WHERE name = '$name'";
					 mysqli_query($db,$string);
				}

			}


		}
		elseif ($grade == 'U.K.G.')
		{ 
			$sql = "INSERT INTO ukg (name,id) VALUES ('$name','$id')";
			if (!(mysqli_query($db,$sql)))
			die('Sorry Failed to Add...');
			
			else
				{
				
					$sql = "SELECT name FROM ukg ORDER BY name ASC";
					$exe = mysqli_query($db,$sql);
					$i = 0;
					while ($data = mysqli_fetch_assoc($exe))
						{
							$i++;
							$name = $data['name'];
							$string = "UPDATE ukg SET roll_no = '$i' WHERE name = '$name'";
							mysqli_query($db,$string);
						}

				}
		}
	var_dump($_FILES);
	$img = $_FILES['photo']['tmp_name'];
	$img_data = file_get_contents($img);
	file_put_contents('images/image-'.$id.'.jpg', $img_data); 
	
}

elseif (isset($_POST['marks'])) 
{

	var_dump($_POST);
	
}