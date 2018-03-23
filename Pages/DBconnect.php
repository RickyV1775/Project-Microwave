<?php
session_start();
$_SESSION['uname'] = $_POST['username'];
$servername = "141.219.194.34";
$username = "tspSpring2018";
$password = "TeamSoftwareProject";
$dbname = "TeamSoftwareProject";

$email =$_POST['email'];
$pass = md5($_POST['password']);


echo $uname;
echo "<br>";
echo $pass;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user WHERE uid ='" .$email."' and pass = '" .$pass."'");
    if( $stmt->execute()){
        echo $stmt->rowCount();
        if( $stmt->rowCount() == 1 ){
            session_start();
            header('Location: http://schaftchat.tk/doc/main/schaft.php');
        }else{
            header('Location: http://schaftchat.tk');
        }
    }
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
