<?php
session_start();
print_r($_SESSION);
require 'functions.php';
session_unset('document');
$con = connect('digital school');

/* ################### table students   #################   */



/*
$sql = "CREATE TABLE students (
	id int(5) AUTO INCREMENT,
	name VARCHAR(50) NOT NULL,
	roll_no INT(5) NOT NULL,

	PRIMARY KEY (id)
)";

*/








	/*   ########  table nursery  ######## */

/*
$sql = "CREATE TABLE nursery (
	id int(5),
	name VARCHAR(50) NOT NULL,
	roll_no INT(5) NOT NULL,
	eng INT(5) NOT NULL,
	nep INT(5) NOT NULL,
	math INT(5) NOT NULL,
	ut1 INT(5) NOT NULL,
	ut2 INT(5) NOT NULL,
	ut3 INT(5) NOT NULL,
	First INT(5) NOT NULL,
	Sec INT(5) Not Null,
	third Int(5) not null,
	PRIMARY KEY (id)
)";*/


/*   ########  table ukg  ######## */



/*
$sql = "CREATE TABLE ukg (
	id int(5),
	name VARCHAR(50) NOT NULL,
	roll_no INT(5) NOT NULL,
	eng INT(5) NOT NULL,
	nep INT(5) NOT NULL,
	math INT(5) NOT NULL,
	science int(5) NOT NULL,
	social int(5) NOT NULL,
	ut1 INT(5) NOT NULL,
	ut2 INT(5) NOT NULL,
	ut3 INT(5) NOT NULL,
	First INT(5) NOT NULL,
	Sec INT(5) Not Null,
	third Int(5) not null,
	PRIMARY KEY (id)
)";


*/


/*   ########  table ukg  ######## */


/*
$sql = "CREATE TABLE lkg (
	id int(5),
	name VARCHAR(50) NOT NULL,
	roll_no INT(5) NOT NULL,
	eng INT(5) NOT NULL,
	nep INT(5) NOT NULL,
	math INT(5) NOT NULL,
	science INT(5) NOT NULL,
	ut1 INT(5) NOT NULL,
	ut2 INT(5) NOT NULL,
	ut3 INT(5) NOT NULL,
	First INT(5) NOT NULL,
	Sec INT(5) Not Null,
	third Int(5) not null,
	PRIMARY KEY (id)
)";

*/

if (mysqli_query($con,$sql))
	echo "Ok";
else
	echo "not Ok";