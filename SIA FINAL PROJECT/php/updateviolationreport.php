<?php
// Include the database connection file
include 'dbconnection.php';

// Get the JSON data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Extract data
$violationID = $data['violationID'];
$srCode = $data['srCode'];
$violationDate = $data['violationDate'];
$violationTime = $data['violationTime'];
$remarks = $data['remarks'];
$violationType = $data['violationType'];

// Update the database
$sql = "UPDATE tbl_violationreport SET SRCode = '$srCode', ViolationDate = '$violationDate', ViolationTime = '$violationTime', ViolationTypeID= '$violationType', Remarks = '$remarks' WHERE ViolationID = $violationID";

if ($conn->query($sql) === TRUE) {
    // If the update is successful, you can send a success response
    http_response_code(200);
    echo json_encode(['message' => 'Update successful']);
} else {
    // If there's an error, you can send an error response
    http_response_code(500);
    echo json_encode(['message' => 'Update failed', 'error' => $conn->error]);
}

// Close the database connection
$conn->close();
?>
