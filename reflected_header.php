<!DOCTYPE html>
<html>
<head>
    <title>Reflected XSS - Custom Header</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            color: cyan;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Custom Header Example</h1>
    
    <?php
    if (isset($_SERVER['HTTP_CUSTOM_HEADER'])) {
        $customHeader = $_SERVER['HTTP_CUSTOM_HEADER'];
        echo "<p>You sent a custom header: " . $customHeader . "</p>";
    }
    ?>
</body>
</html>
