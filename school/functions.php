<?php

function connect($name)
{
		if ($db = mysqli_connect("localhost","root","",$name))
			return $db;
		else
			die("Cannot Connect to Database...");

}

function removeFromString($str, $item) {
    $parts = explode(',', $str);

    while(($i = array_search($item, $parts)) !== false) {
        unset($parts[$i]);
    }

	return implode(',', $parts);
}
