<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("configurations/connect.php");

function validate_input($data) {
    return htmlspecialchars(trim($data));
}

if (isset($_POST['Save'])) {
    // Validate and sanitize input
    $studentId = validate_input($_POST['studentno']);
    $firstName = validate_input($_POST['firstname']);
    $lastName = validate_input($_POST['lastname']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = preg_replace('/[^\d+]/', '', validate_input($_POST['phoneno']));
    $phone = preg_match("/^\+?\d{10,15}$/", $phone) ? $phone : null;
    $Cp = validate_input($_POST['programme_code']);
    $by = validate_input($_POST['book_createdby']);

     // Debugging checks to see which input is invalid
     if (!$studentId) {
        echo "Student ID is invalid.<br>";
    }
    if (!$firstName) {
        echo "First Name is invalid.<br>";
    }
    if (!$lastName) {
        echo "Last Name is invalid.<br>";
    }
    if (!$email) {
        echo "Email is invalid.<br>";
    }
    if (!$phone) {
        echo "Phone number is invalid.<br>";
    }
    if (!$Cp) {
        echo "Programme Code is invalid.<br>";
    }
    if (!$by) {
        echo "Book Created by is invalid.<br>";
    }

    if ($studentId && $firstName && $lastName && $email && $phone && $Cp && $by) {  // All fields must be valid
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO students (studentno, firstname, lastname, email, phoneno, programme_code, book_createdby) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $studentId, $firstName, $lastName, $email, $phone, $Cp, $by);

        if ($stmt->execute()) {
            echo "Student details successfully saved.";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Invalid input. Please check your data.";
    }
}
?>
