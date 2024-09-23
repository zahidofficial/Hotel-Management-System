<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "hotel");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$roomCategory = $_POST['roomCategory'];
$roomPrice = $_POST['roomPrice'];
$roomStatus = $_POST['roomStatus'];

// Ensure roomPrice is numeric
if (!is_numeric($roomPrice)) {
    $_SESSION['message'] = "Room price must be a valid number.";
    header("Location: Dashboard.php");
    exit();
}

// Update the room information in the database
$sql = "UPDATE rooms SET price = ?, status = ? WHERE room_category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("dss", $roomPrice, $roomStatus, $roomCategory);

if ($stmt->execute()) {
    // Success message
    $_SESSION['message'] = "Room information updated successfully!";
} else {
    // Error message
    $_SESSION['message'] = "Error updating room information: " . $stmt->error;
}

$stmt->close();
mysqli_close($conn);

// Redirect back to the dashboard or the page you want
header("Location: Dashboard.php");
exit();
?>
