<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form - Reflected XSS</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: black;
            color: white;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #ff4500;
        }

        .feedback-box {
            margin-top: 20px;
            display: inline-block;
            padding: 20px;
            background-color: #333;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        textarea {
            width: 300px;
            height: 100px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            color: #333;
        }

        button {
            background-color: #ff4500;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e63e00;
        }

        .result {
            margin-top: 30px;
            font-size: 18px;
            color: white;
            background-color: #333;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: inline-block;
        }
    </style>
</head>

<body>
    <h1>Feedback Form</h1>
    <div class="feedback-box">
        <form method="get" action="">
            <label for="feedback">Leave your feedback:</label><br>
            <textarea id="feedback" name="feedback" placeholder="Enter your feedback here..."></textarea><br>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>

    <?php
    if (isset($_GET['feedback'])) {
        $feedback = $_GET['feedback'];
        echo "<div class='result'><p>Your feedback: " . $feedback . "</p></div>";  // Reflected XSS açığı
    }
    ?>
</body>

</html>

