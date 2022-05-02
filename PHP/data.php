<?php
include_once("db_connect.php");


//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', '482Dashboard');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}
//TODO
//query to get data from the table (Selects from both the Product and Sales table)
$query = sprintf("SELECT transactionID, productName,UnitPrice FROM Products ORDER BY transactionID");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}


$result->close();


$mysqli->close();

// print the data
print json_encode($data);