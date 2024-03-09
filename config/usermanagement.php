<?php
include('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "insert into users (user_id,username,password,role) values (4,'".$username."','".$password."','".$role."')";

if (mysqli_query($conn, $sql)) {
  echo "New user created successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>