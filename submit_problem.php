<?php
include 'db_config.php';

$name = $_POST['name'];
$village = $_POST['village'];
$problem = $_POST['problem'];
$solution = $_POST['solution'];

$sql = "INSERT INTO problems (name, village, problem, solution) 
        VALUES ('$name', '$village', '$problem', '$solution')";

if ($conn->query($sql) === TRUE) {
    echo "Problem submitted successfully. <a href='problems.html'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
