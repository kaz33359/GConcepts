$conn = mysqli_connect('localhost', 'root', '', 'gconcepts');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}