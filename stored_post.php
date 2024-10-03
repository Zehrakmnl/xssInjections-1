<!-- xss_test.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Test</title>
</head>
<body>
    <h1>Leave a comment</h1>

    <!-- Comment Form -->
    <form action="xss_test.php" method="POST">
        <label for="comment">Your Comment:</label>
        <textarea id="comment" name="comment"></textarea>
        <input type="submit" value="Submit">
    </form>

    <?php
    // File to store comments
    $file = 'comments.txt';

    // Check if a comment is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['comment'])) {
        $comment = $_POST['comment'];

        // Save comment to the file
        file_put_contents($file, $comment . PHP_EOL, FILE_APPEND);

        echo "<p>Comment saved!</p>";
    }

    // Display stored comments
    if (file_exists($file)) {
        echo "<h2>Comments:</h2>";
        $comments = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($comments as $comment) {
            // Display the comment directly (XSS vulnerability here if unsanitized)
            echo "<p>" . $comment . "</p>";
        }
    }
    ?>
</body>
</html>
