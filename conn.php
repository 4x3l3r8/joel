<?php
define('DBHOST','localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'joel');

$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn) {
    $set_db = mysqli_select_db($conn, DBNAME);
    if(!$set_db){
        die("No database selected: " .mysqli_connect_error());
    }else {
        // echo "Connected successfully";
    }
} else {
    die("Couldn't connect to DB: " .mysqli_connect_error());
}



?>