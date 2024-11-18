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
    <!-- Do your own css styling -->
</head>
<body>
    <h1 class="header">Enter Book Details: </h1>
    <form action="InsertBooks.php" method="post" autocomplete="on">
        <div class="outside-input-group">
            <div class="input-group">
                <label class="bookn" for="">Book Number:</label>
                <input type="text" name="bookno" required>
            </div>
        </div>
            <div class="outside-input-group">
                <div class="input-group">
                    <label for="">Book Title:</label>
                    <input type="text" name="title" required>
                </div>
                <div class="input-group">
                    <label for="">Book Subtitle:</label>
                    <input type="text" name="subtitle">
                </div>
            </div>  
        <div class="outside-input-group">
            <div class="input-group">
                <label for="">Author Name: </label>
                <input type="text" name="author" required>
            </div>
            <div class="input-group">
                <label for="">Book Publisher:</label>
                <input type="text" name="book_publisher" required>
            </div>
            <div class="input-group">
                <label for="">Book Quantity:</label>
                <input type="number" name="book_quantity" required>
            </div>
        </div>
        <!-- <div class="outside-input-group">
            <div class="input-group">
                <label for="">Category:</label>
                <select name="Cadre" id="" required>
                    <option value="">==== Select ====</option>
                    <option value="Admin">System Administrator</option>
                    <option value="Manager">Manager</option>
                    <option value="Waiter">Waiter</option>
                </select>
            </div> -->
        </div>
        <div class="btn">
            <button type="submit" name="Save">Submit Book Details</button>
        </div>
    </form>
</body>
</html>
