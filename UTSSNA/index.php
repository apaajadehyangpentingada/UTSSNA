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

// Display results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Nama"]. "- Alamat: " . $row["Alamat"] . "- Jabatan: ". $row["Jabatan"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
