<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS Using GET</title>
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
    </style>
</head>
<body>
    <h1>DOM XSS Using GET Method</h1>
    <p id="output"></p>
    <script>
        var query = document.location.search;
        document.getElementById("output").innerHTML = "You searched for: " + query;
    </script>
</body>
</html>
