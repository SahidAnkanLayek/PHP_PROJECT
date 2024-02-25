<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <h2>Output</h2>
    <?php
    // Check if the cookie is set
    if(!isset($_COOKIE['example_cookie'])) {
        echo "<p>Cookie 'example_cookie' is not set.</p>";

        // Set the cookie
        $cookie_value = "This is a sample cookie value.";
        setcookie('example_cookie', $cookie_value, time() + (86400 * 30), "/"); // Expires in 30 days
        echo "<p>Cookie 'example_cookie' is set.</p>";
    } else {
        echo "<p>Cookie 'example_cookie' is set.</p>";

        // Display the cookie value
        echo "<p>Value of 'example_cookie': " . $_COOKIE['example_cookie'] . "</p>";

        // Delete the cookie
        setcookie('example_cookie', '', time() - 3600, "/"); // Set expiration time to the past
        echo "<p>Cookie 'example_cookie' is deleted.</p>";
    }
    ?><h2>Source Code</h2><?php
    highlight_file("cookies.php");
    ?>
</body>
</html>
