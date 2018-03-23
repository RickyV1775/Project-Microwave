<?php
var_dump($_POST);
session_start();
$firstName = returnFirst($_POST['fullName']);
$lastName = returnLast($_POST['fullName']);
$email = $_POST['email'];
$pass = $_POST['password'];
$conf = $_POST['verifyPassword'];

$_SESSION['uname'] = $uname;
$servername = "141.219.194.34";
$username = "tspSpring2018";
$password = "TeamSoftwareProject";
$dbname = "TeamSoftwareProject";

echo $uname;
echo $pass;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("CALL addUser( '".$firstName."', '".$lastName."', '".$email."', '".$pass."', '".$conf."')"  );
    $stmt->execute();


}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

header('Location:http://schaftchat.tk/doc/main/schaft.php')
?>
