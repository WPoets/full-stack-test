<?php
// Include database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $id = $_POST['id'];

    // Delete data from the database
    $sql = "DELETE FROM your_table_name WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
