<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
            text-decoration: underline;
        }
        h2 {
            text-align: center;
            text-decoration: underline;
        }
        ol {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: left;
            width: 70%;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: #000;
            text-decoration: none;
        }
        a:hover {
            color: #555;
        }
        .logout-btn {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            margin-top: 20px;
        }
        .logout-btn:hover {
            background-color: #005f78;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Assignment Page</h1>
    <h2>Program List</h2>
    <ol>
        <li><a href="pattern.php">Create a pattern program</a></li>
        <li><a href="fact_recursion.php">Factorial number</a></li>
        <li><a href="palindrom.php">Check if a number is palindrome or not</a></li>
        <li><a href="calculator.php">Calculator</a></li>
        <li><a href="string.php">Check if a string is lowercase</a></li>
        <li><a href="leapyear.php">Check if a year is a leap year or not</a></li>
        <li><a href="dataRetrive.php">Retrieve all data from database</a></li>
        <li><a href="imageDisplay.PHP">Create a PHP code to upload an image and display it on the page</a></li>
        <li><a href="cookies.php">Set & Delete Cookies</a></li>
    </ol>
    <a href="logout.php" class="logout-btn">Log Out</a>
</body>
</html>
