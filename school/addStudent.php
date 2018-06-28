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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
	<style type="text/css">
		.canv
		{
			float:right;
			margin-right:100px;
			border:solid black;
			width: 200px;
			height: 200px;
		}
		.video
		{
			display: none;
			width:150px;
			height: 150px;
		}
		.video video 
		{
			width:100%;
			height: 100%;
		}
		.canv img
		{
			width: 100%;
			height: 100%;
		}

		.canv canvas
		{
			width: 100%;
			height: 100%;
		}

	</style>
</head>
<body>

	<h1 align="center">Add Student</h1>
<div class="canv" >
<canvas></canvas>
</div>
<form method="POST" action="process.php" class="form" enctype="multipart/form-data">
	
	<p>
		<label for="name">Name :</label><input type="text" name="studentName" id="name" required>
	</p>
	<p>
		<label>Gender :</label>
		<input type="radio" name="gender" value="M" required> Male
		<input type="radio" name="gender" value="F" required=""> Female
		<input type="radio" name="gender" value="O" required=""> Other
	</p>
	<p>
		<label for="fName">Father's Name :</label><input type="text" name="fatherName" id="fName" required>
	</p>
	<p>
		<label for="mName">Mother's Name :</label><input type="text" name="motherName" id="mName" required>
	</p>
	<p>
		<label for="DOB">Date Of Birth :</label><input type="Date" name="DOB" id="DOB" required> 
	</p>

	<p>
		<label for="grade">Grade Planned to Admit: </label>
		<select name="grade" id="grade">
			<option>P.G.</option>
			<option>Nursery</option>
			<option>L.K.G.</option>
			<option>U.K.G.</option>
		</select>
	</p>
	<p>
		<label for="contact">Contact Number: </label> <input type="number" name="contact" id="contact" required>	
		<input type="number" name="anotherNum" placeholder="Reference Numbers"> 	
	</p>
	<p>
		<label>Permanent Address :</label>
		<input type="text" name="District" placeholder="District" required>
		<select name="vdcOrMuni">
			<option>VDC</option>
			<option>Municipality</option>
		</select>
		<input type="text" name="VDC" placeholder="VDC/Municipality" required>
		<input type="number" name="Ward" placeholder="Ward No" required>
	</p>
	<p>
		<label for="tempAddress">Temporary Address :</label><input type="text" name="tempAddress" id="tempAddress" required>
	</p>
	<p>
		<label for="photo">Photo :</label>
		<input type="FILE" name="photo" accept="image/*" id="photo" src="images/image-11.jpg">
		<i class="err" id="noimage"></i>
	</p>
		<input type="hidden" name="pass" id="password">
	<p>
		<input type="submit" name="newStudent" value="Add">
	</p>

<?php  if (isset($_GET['ok'])) :?>
	<p class="good"><label>
	<i>Successfully Added student....!!<br>
		 id =&gt; <?php echo $_GET['id'] ?><br>
		 password =&gt; <?php echo $_GET['pass'];?>
		 <br>

	</i></label></p>
<?php endif; ?>
</form>
<div class="video">
<video></video>
</div>
<input type="button" id="snap_btn" value="Take Photo">

<script type="text/javascript">
	var img = document.getElementById('snap_btn');
	var canv = document.querySelector('.canv');
	var video = document.querySelector('.video');
	var photo = document.getElementById('photo');
	var form = document.querySelector('.form');
	img.onclick = function()
	{
		img.value = "Snap";
		video.style.display = 'block';
		navigator.mediaDevices.getUserMedia({video:true}).then(function (e){
			video.children[0].srcObject = e;
			video.children[0].play();
			img.onclick = function()
			{
				ctx = canv.children[0].getContext('2d');
				ctx.drawImage(video.children[0],-50,-50,canv.children[0].width+45,canv.children[0].height+45)
			}

		})
	}
	photo.onchange = function()
	{
		picture = photo.files[0];
		if (!(picture.type.startsWith('image/')))
			document.getElementById('noimage').innerHTML = "<br>This is not image file select another......!!";
		else
		{
			fileReader = new FileReader();
			fileReader.readAsDataURL(picture);
			fileReader.onload = function(e)
			{
				canv.innerHTML = "<img src ="+e.target.result+">";
				video.style.display = 'none';
			}
		}
	}
	form.onsubmit = function()
	{
		var pass = document.getElementById('password');
		var x = document.getElementById('name').value;
		var y = document.getElementById('photo').files[0].size;
		var str = x.charCodeAt()+y;
		str += Math.floor(Math.random()*1000);
		while (btoa(str).endsWith('='))
			str = Math.floor(Math.random()*10) + 200;
		pass.value = btoa(str).toLowerCase();
	}

</script>
</body>
</html>