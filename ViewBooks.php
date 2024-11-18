<?php
include("configurations/connect.php");

$sql = "SELECT id, bookno, title, subtitle, author, book_publisher, book_quantity FROM books";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books List</title>
    <style>
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { padding: 8px 12px; border: 1px solid #ddd; text-align: center; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Available Books</h2>
    <table>
        <tr>
            <th>Book ID</th>
            <th>Book No</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Author</th>
            <th>Book Publisher</th>
            <th>Book Quantity</th>
            <th>Actions</th>
        </tr>
        <?php while ($book = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($book['id']) ?></td>
                <td><?= htmlspecialchars($book['bookno']) ?></td>
                <td><?= htmlspecialchars($book['title']) ?></td>
                <td><?= htmlspecialchars($book['subtitle']) ?></td>
                <td><?= htmlspecialchars($book['author']) ?></td>
                <td><?= htmlspecialchars($book['book_publisher']) ?></td>
                <td><?= htmlspecialchars($book['book_quantity']) ?></td>
                <td>
                    <a href="index.php?id=<?= htmlspecialchars($book['id']) ?>">Add</a> |
                    <a href="EditBooks.php?id=<?= htmlspecialchars($book['id']) ?>">Edit</a> |
                    <a href="DeleteBooks.php?id=<?= htmlspecialchars($book['id']) ?>" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
