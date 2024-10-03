<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS Using POST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Black background */
            color: #E0E0E0; /* Soft gray text */
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #B2DFDB; /* Soft teal heading */
        }
        textarea {
            width: 300px;
            height: 100px;
            background-color: #444; /* Darker area for input */
            color: #E0E0E0; /* Soft gray text */
            border: 1px solid #B2DFDB; /* Soft teal border */
            border-radius: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>DOM XSS Using POST Method</h1>

    <form action="" method="POST">
        <label for="comment">Leave a comment:</label><br>
        <textarea id="comment" name="comment"></textarea><br>
        <input type="submit" value="Submit">
    </form>

    <div id="display"></div>

    <?php
    // Check for POST submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        // Display the comment directly (XSS vulnerability)
        echo "<script>document.getElementById('display').innerHTML = 'User input: " . $comment . "';</script>";
    }
    ?>
</body>
</html>
