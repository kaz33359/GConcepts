<?php
session_start();
// connect to database
$conn = mysqli_connect('localhost','root','','gconcept');
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/GConcepts/');
define('SITE_PATH','http://127.0.0.1/GConcepts/');


// check connection
if (!$conn) {
  die("connection error: ".mysqli_connection_error());
  // echo "connection error: ".mysqli_connection_error();
}else {
  // echo "string";
}
