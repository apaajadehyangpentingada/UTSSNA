<?php
$servername = "172.20.0.3";
$username = "root";
$password = "redlock";
$database = "Redlock";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute SQL query
$result = $conn->query("SELECT * FROM users");
$jumlah = 0;

while ($row = $result->fetch_assoc()) {
     $jumlah++;
}

    echo "Total users: " . $jumlah;
