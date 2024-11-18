<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Students</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Serif+Oriya:wght@400..700&display=swap" rel="stylesheet">
    <!-- Do your own css styling -->
</head>
<body>
    <h1 class="header">Enter Student Details: </h1>
    <p>To use book records, one must first enter your student details if you student details exist, click the view button to check.</p>
    <form action="InsertStudents.php" method="post" autocomplete="on">
        <div class="outside-input-group">
            <div class="input-group">
                <label class="stno" for="">Student Number:</label>
                <input type="text" name="studentno" required>
            </div>
        </div>
            <div class="outside-input-group">
                <div class="input-group">
                    <label for="">First Name:</label>
                    <input type="text" name="firstname" required>
                </div>
                <div class="input-group">
                    <label for="">Last Name:</label>
                    <input type="text" name="lastname" required>
                </div>
            </div>  
        <div class="outside-input-group">
            <div class="input-group">
                <label for="">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="">Phone Number: </label>
                <input type="text" name="phoneno" required>
            </div>
        </div>
        <div class="outside-input-group">
            <div class="input-group">
                <label for="">Programme Code:</label>
                <input type="text" name="programme_code" required>
            </div>
            <div class="input-group">
                <label for="">Book Created by: </label>
                <input type="number" name="book_createdby" required>
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
            </div>
        </div> -->
        <div class="btn">
            <button type="submit" name="Save">Submit Student Details</button>
        </div>
    </form>
</body>
</html>