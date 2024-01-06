<?php
// Include database connection file
include 'db_connection.php';

// Select data from the database
$sql = "SELECT * FROM your_table_name";
$result = mysqli_query($conn, $sql);

// Fetch data and display
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . " Name: " . $row['name'] . " Description: " . $row['description'] . "<br>";
}

// Close database connection
mysqli_close($conn);
?>
