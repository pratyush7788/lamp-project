<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully <br>";
    echo "<a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
