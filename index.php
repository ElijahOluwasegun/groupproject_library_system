<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Serif+Oriya:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
     <!-- done by: Kamikazi hafsa 213-384
    Oluwasegun Bamidele-Oseni Elijah, 195-790
    Galiwango Reagan, 197-344
    BASAJJASUBI BENJAMIN 197-310
    Mwesigwa Allan Isaac 197-308
    Tumwiine Kevin 130-550-->
    <div id="response"></div>
    
    <!-- Add Book Form -->
    <div class="form-container add-book">
        <h2>Add Book Details: </h2>
        <form id="addBookForm" action="InsertBooks.php" method="post" autocomplete="on">
            <label class="bookn" for="">Book Number:</label>
            <input type="text" name="bookno" required>
            <label for="">Book Title:</label>
            <input type="text" name="title" required>
            <label for="">Book Subtitle:</label>
            <input type="text" name="subtitle">
            <label for="">Author Name: </label>
            <input type="text" name="author" required>
            <label for="">Book Publisher:</label>
            <input type="text" name="book_publisher" required>
            <label for="">Book Quantity:</label>
            <input type="number" name="book_quantity" required>
            <div class="btn"> 
                <div class="inner-btn">
                    <button type="submit" name="Save" class="add-book-btn">Submit Book Details</button>
                </div>
            </div>
        </form>
        <div class="inner-btn2">
            <button type="submit" name="Save" class="view-btn"><a href="ViewBooks.php">View Books</a></button>
            <button type="submit" name="Save" class="edit-btn"><a href="ViewBooks.php">Edit Books</a></button>
            <button type="submit" name="Save" class="delete-btn"><a href="ViewBooks.php">Delete Books</a></button>
        </div>
    </div>

    <!-- Add Student Form -->
    <div class="form-container add-student">
        <h2>Enter Student Details: </h2>
        <form id="addStudentForm" action="InsertStudents.php" method="post" autocomplete="on">
            <label class="stno" for="">Student Number:</label>
            <input type="text" name="studentno" required>
            <label for="">First Name:</label>
            <input type="text" name="firstname" required>
            <label for="">Last Name:</label>
            <input type="text" name="lastname" required>
            <label for="">Email:</label>
            <input type="email" name="email" required>
            <label for="">Phone Number: </label>
            <input type="text" name="phoneno" required>
            <label for="">Programme Code:</label>
            <input type="text" name="programme_code" required>
            <label for="">Book Created by: </label>
            <input type="number" name="book_createdby" required placeholder="Check view books for the id to the book you created" width="300">
            <div class="btn">
                <button class="add-student-btn" type="submit" name="Save">Submit Student Details</button>
            </div>
        </form>
    </div>
</body>
</html>
