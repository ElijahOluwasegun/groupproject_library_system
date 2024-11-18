<?php
include("configurations/connect.php");

$message = "";

function validate_input($data) {
    return htmlspecialchars(trim($data));
}

if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $book = $stmt->get_result()->fetch_assoc();
    
    if (!$book) {
        die("Book not found.");
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $BNo = validate_input($_POST['bookno']);
        $Te = validate_input($_POST['title']);
        $Se = validate_input($_POST['subtitle']);
        $A = validate_input($_POST['author']);
        $Bp = validate_input($_POST['book_publisher']);
        $Bq = filter_var($_POST['book_quantity'], FILTER_VALIDATE_INT);

        if ($BNo && $Te && $A && $Bp && $Bq) {
            $stmt = $conn->prepare("UPDATE books SET bookno = ?, title = ?, subtitle = ?, author = ?, book_publisher = ?, book_quantity = ? WHERE id = ?");
            $stmt->bind_param("sssssii", $BNo, $Te, $Se, $A, $Bp, $Bq, $id);

            if ($stmt->execute()) {
                $message = "Book details updated successfully.";
                header("Location: ViewBooks.php");
                exit();
            } else {
                $message = "Error updating book details.";
            }
        } else {
            $message = "Invalid input. Please check your data.";
        }
    }
} else {
    die("Invalid request.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <h1 class="header">Edit Book Details</h1>
    <?php if ($message): ?>
        <p style="color: green; text-align: center;"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form action="EditBooks.php?id=<?= htmlspecialchars($id) ?>" method="post">
        <div class="outside-input-group">
            <div class="input-group">
                <label for="">Book Number:</label>
                <input type="text" name="bookno" value="<?= htmlspecialchars($book['bookno']) ?>" required>
            </div>
            <div class="input-group">
                <label for="">Book Title:</label>
                <input type="text" name="title" value="<?= htmlspecialchars($book['title']) ?>" required>
            </div>
            <div class="input-group">
                <label for="">Book Subtitle:</label>
                <input type="text" name="subtitle" value="<?= htmlspecialchars($book['subtitle']) ?>">
            </div>
            <div class="input-group">
                <label for="">Author Name:</label>
                <input type="text" name="author" value="<?= htmlspecialchars($book['author']) ?>" required>
            </div>
            <div class="input-group">
                <label for="">Book Publisher:</label>
                <input type="text" name="book_publisher" value="<?= htmlspecialchars($book['book_publisher']) ?>" required>
            </div>
            <div class="input-group">
                <label for="">Book Quantity:</label>
                <input type="number" name="book_quantity" value="<?= htmlspecialchars($book['book_quantity']) ?>" required>
            </div>
        </div>
        <div class="btn">
            <button type="submit">Update Book</button>
        </div>
    </form>
</body>
</html>
