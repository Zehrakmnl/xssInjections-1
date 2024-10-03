
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS - POST Request (Comment Form)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Arka plan siyah */
            color: #fff; /* Metin rengi beyaz */
            margin: 40px;
        }

        .form-container {
            background-color: #333; /* Form arka plan rengi */
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            margin: 0 auto;
            color: #fff; /* Form içeriği beyaz */
        }

        .form-container input[type="text"], .form-container textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #444; /* Input arka plan rengi */
            color: #fff; 
        }

        .form-container button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #444;
            border-radius: 5px;
            color: #fff;
        }
    </style>
</head>

<body>

    <h1>Leave a Comment</h1>
    <div class="form-container">
        <form method="POST" action="">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">

            <label for="comment">Your Comment:</label>
            <textarea id="comment" name="comment" placeholder="Write your comment"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $comment = $_POST['comment'];

        // XSS açığı: Kullanıcıdan gelen veriler doğrudan ekrana yazdırılıyor.
        echo "<div class='result'>";
        echo "<p><strong>$name</strong> commented: </p>";
        echo "<p>$comment</p>";
        echo "</div>";
    }
    ?>
</body>

</html>
