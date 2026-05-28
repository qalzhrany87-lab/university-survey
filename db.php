<?php

$conn = new mysqli(
"sql8.freesqldatabase.com",
"sql8828600",
"yJdBJBmKHg",
"sql8828600"
);

if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

?>