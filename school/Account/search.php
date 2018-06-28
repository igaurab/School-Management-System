<?php 
    include_once 'template.php';
    showheader();
    include '../functions.php';
    $db_name = "school";
    $db  = connect($db_name);

$studentClass = $_POST['studentClass'];
$studentRollNo = $_POST['studentRollNo'];

$stusql = "SELECT *  FROM `students` INNER JOIN `{$studentClass}` on students.id = {$studentClass}.id WHERE 
		{$studentClass}.roll_no = '$studentRollNo';";
$query = mysqli_query($db,$stusql);
$sturow = mysqli_fetch_assoc($query);
$studentId = $sturow["id"];



$sql = "SELECT * FROM `account_status` WHERE studentId = $studentId";
$q = mysqli_query($db,$sql);
$r = mysqli_fetch_assoc($q);

$_SESSION['id'] = $studentId;
$_SESSION['total'] = $r['balance'];
$_SESSION['class'] = $studentClass;
$_SESSION['roll'] = $studentRollNo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="card">
                <div class="card-title text-center"><h5>Student Information</h5></div>
                <div class="card-body">
                    <label for="name">Name: </label>
                    <?php echo $sturow["name"]; ?><br>
                    <label for="class">Class:</label>
                    <?php echo $sturow['Grade'];?><br>
                    <label for="class">Roll No:</label>
                    <?php echo $sturow['roll_no'];?><br>
                    <?php //var_dump($r);?>
                </div>
            </div>
        
        <div class"row clearfix">
            <div class="col mt-5 float-left">
            <p>Total Pending Amount is: <?php echo $r['balance'];?> </p>
            <div>
        </div>

        <div class="text-center mt-3">
            <h5>Account Information</h5>
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Month</th>
                    <th scope="col">Tution</th>
                    <th scope="col">Food</th>
                    <th scope="col">Transport</th>
                    <th scope="col">Extra</th>
                    <th scope="col">Total</th>
                    <th scope="col">Pending Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM `account` INNER JOIN students ON account.studentId = students.id WHERE students.id = $studentId"; 
                $querys = mysqli_query($db,$sql);
                $i=1;
                while($row = mysqli_fetch_assoc($querys)): ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo date('M', strtotime($row['datetime'])) ?></td>
                    <td><?php echo $row["tution"] ?></td>
                    <td><?php echo $row["food"] ?></td>
                    <td><?php echo $row["transportation"] ?></td>
                    <td><?php echo $row["extra"] ?></td>
                    <td><?php echo $row["total"] ?></td>
                    <td><?php echo $r["balance"] ?></td>
                   <?php $i++; ?>
                </tr>
<?php endwhile; ?>
            </tbody>
        </table>
        <form action="pay.php" method="POST">
            <div class="text-center mt-5 form-group">
                <input class="form-control text-center float-left" placeholder="Enter Amount" name="amount" />
                <button class="btn btn-outline-primary mt-5" type="submit" name="paybill" style="width:200px;">Pay Bill</button>
            </div>
        </form>
        </div>
        <a href="index.php"><button class="btn btn-info btn-block mt-5">Back</button></a>
    </main>
</body>
</html>