<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Black background */
            color: #fff; /* White text color */
            text-align: center;
            padding: 50px;
        }

        form {
            background-color: #222; /* Dark background for form */
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            background-color: #333; /* Darker background for textarea */
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF; /* Blue button */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .bio {
            margin-top: 30px;
            background-color: #222; /* Dark background for displayed bio */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.1);
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Update your bio</h1>

    <!-- Form to update bio -->
    <form action="stored_get.php" method="GET">
        <label for="bio">Update your bio:</label>
        <textarea id="bio" name="bio"></textarea>
        <input type="submit" value="Update">
    </form>

    <?php
    // Check if a bio is submitted via GET
    if (isset($_GET['bio'])) {
        $bio = $_GET['bio'];

        // Save the bio to a file (could be database)
        file_put_contents('bio.txt', $bio . PHP_EOL);

        // Display the bio directly (vulnerable to XSS)
        echo "<div class='bio'><h2>Your Bio:</h2><p>" . $bio . "</p></div>";
    }
    ?>
</body>
</html>
