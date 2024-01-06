<?php
// Include database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Update data in the database
    $sql = "UPDATE your_table_name SET name='$name', description='$description' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
