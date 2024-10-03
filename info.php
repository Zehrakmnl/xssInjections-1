
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Test Page</title>
    <style>
        body {
            background-color: #000; 
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 50px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin: 20px;
        }

        .dropdown .dropbtn {
            background-color: #444;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 8px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            border-radius: 8px;
        }

        .dropdown-content a:hover {
            background-color: #2e8b57;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #2e8b57;
        }

        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            flex-direction: column;
        }

        .dropdown-group {
            display: flex;
            justify-content: center;
        }

        footer {
            margin-top: 50px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>LETS TRY SOMETHONG</h1>

    <div class="dropdown-group">
        <!-- Reflected XSS Dropdown -->
        <div class="dropdown">
            <button class="dropbtn">Reflected XSS</button>
            <div class="dropdown-content">
                <a href="reflected_get.php">GET</a>
                <a href="reflected_post.php">POST</a>
                <a href="reflected_header.php">HEADER</a>
            </div>
        </div>

        <!-- Stored XSS Dropdown -->
        <div class="dropdown">
            <button class="dropbtn">Stored XSS</button>
            <div class="dropdown-content">
                <a href="stored_get.php">GET</a>
                <a href="stored_post.php">POST</a>
                <a href="stored_header.php">HEADER</a>
            </div>
        </div>

        <!-- DOM XSS Dropdown -->
        <div class="dropdown">
            <button class="dropbtn">DOM XSS</button>
            <div class="dropdown-content">
                <a href="dom_get.php">GET</a>
                <a href="dom_post.php">POST</a>
                <a href="dom_header.php">HEADER</a>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>ZANY © 2024</p>
</footer>

</body>
</html>

