<?php
include("configurations/connect.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ViewBooks.php?message=Book deleted successfully");
        exit();
    } else {
        echo "Error: Could not delete the book.";
    }
} else {
    echo "<p>Invalid request: Book ID is missing. Please go back and select a valid book to delete.</p>";
    echo '<p><a href="booksinterface.php">Return to Book List</a></p>';
}
include 'ViewBooks.php';
?>
