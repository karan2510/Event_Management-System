<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db/connect.php";
?>

<?php
$email = $_POST['email'];
 $name = $_POST['name'];
 $password = $_POST['password'];

$sql = "INSERT INTO users (id,name,email, password)
VALUES (DEFAULT,'$email','$name', '$password')";

$res_login = $conn->query("select * from users where email='$email'");
                if($res_login -> num_rows > 0)
                {
                      echo "Account is already exists please try with another username";
                }else{

if ($conn->query($sql) === TRUE) {
  header("Location: ./Login/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>