<?php
//database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Insert data into the database
    $sql = "INSERT INTO your_table_name (name, description) VALUES ('$name', '$description')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
