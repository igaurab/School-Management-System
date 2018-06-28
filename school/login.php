<?php
    session_start();
    /*DataBase Connection*/
    include 'functions.php';
    $dbName = 'school';
    $db = connect($dbName);

    /*Login For the Library*/
    if(isset($_POST['library']))
    {
        $name = $_POST['name'];
        $pass = $_POST['password'];
        $group = 'library'; //Since request came from library, set group to library

        $sql = "SELECT * FROM users WHERE 
                `name`= '$name' AND
                `group`= '$group' AND 
                `password`= '$pass' ";

        $query = mysqli_query($db,$sql);
        if($row = mysqli_fetch_assoc($query))
        {
            var_dump($row);
            $_SESSION['user'] = $row['name'];
            header ('Location: Library/index.php');
        }
        else
        {
            header("Location: index.html");
        }
    }

        //Login For the Account 
        if(isset($_POST['account']))
        {
            $name = $_POST['name'];
            $pass = $_POST['password'];
            $group = 'account'; //If the request came from account, set group to account
    
            $sql = "SELECT * FROM users WHERE 
                    `name`= '$name' AND
                    `group`= '$group' AND 
                    `password`= '$pass' ";
    
            $query = mysqli_query($db,$sql);
            if($row = mysqli_fetch_assoc($query))
            {
                var_dump($row);
                $_SESSION['user'] = $row['name'];
                header ('Location: Account/index.php');
            }
            else
            {
                header("Location: index.html");
            }
        } 