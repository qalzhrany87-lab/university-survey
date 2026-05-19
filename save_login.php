<?php

include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$conn->query("INSERT INTO survey_users (email, password)
VALUES ('$email', '$password')");

echo "تم الحفظ بنجاح";

?>