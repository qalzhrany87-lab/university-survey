<?php

include 'db.php';

$result = $conn->query("SELECT * FROM survey_users");

echo "<h2>بيانات الاستبانة</h2>";

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Date</th></tr>";

while ($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td>".$row['created_at']."</td>";
    echo "</tr>";

}

echo "</table>";

?>