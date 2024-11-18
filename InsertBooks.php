<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("configurations/connect.php");

function validate_input($data) {
    return htmlspecialchars(trim($data));
}

if (isset($_POST['Save'])) {
    $BNo = validate_input($_POST['bookno']);
    $Te = validate_input($_POST['title']);
    $Se = validate_input($_POST['subtitle']);
    $A = validate_input($_POST['author']);
    $Bp = validate_input($_POST['book_publisher']);
    $Bq = filter_var($_POST['book_quantity'], FILTER_VALIDATE_INT);

    if ($BNo && $Te && $A && $Bp && $Bq) {  // All required fields must be valid
        // Using MySQLi for object-oriented syntax
        $stmt = $conn->prepare("INSERT INTO books (bookno, title, subtitle, author, book_publisher, book_quantity) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $BNo, $Te, $Se, $A, $Bp, $Bq);

        if ($stmt->execute()) {
            echo "Book Details Successfully Saved";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Invalid input. Please check your data.";
    }
}

include 'ViewBooks.php';
?>
