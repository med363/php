<? php
$title = $_POST[ 'title'];
$release_date = $_POST[ 'date'];
$servername = 'localhost' ;
$username = 'root';
$password = 'root';
$dbname = 'formulaire';
//create connection
$conn = new mysqli( $servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error){
 die('connection failed:' . $conn->connect_error)
}
$sql="INSERT INTO movies (title , release_date) VALUES('{$conn->real_escape_string($title)} , {$conn->real_escape_string($release_date)}')";
if ($conn->query($sql)==TRUE){
 echo"a new movie add" }
else{
 echo "Error: " . $sql ."<br/>" . $conn->error;
}
$conn-> close();
?>