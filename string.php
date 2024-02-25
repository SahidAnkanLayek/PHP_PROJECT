<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowercase Checker</title>
</head>
<body>
  <h2>Output</h2>
    <form method="post" action="">
        <label for="string">Enter a string:</label>
        <input type="text" id="string" name="string" required><br><br>
        <button type="submit" name="check">Check</button>
    </form>

    <?php
    // Function to check if a string is all lowercase
    function isLowercase($str) {
        return $str === strtolower($str); // Convert string to lowercase and compare
    }

    if(isset($_POST['check'])) {
        $string = $_POST['string'];

        if(isLowercase($string)) {
            echo "<p>The string '$string' is all lowercase.</p>";
        } else {
            echo "<p>The string '$string' is not all lowercase.</p>";
        }
    }
    ?><h2>Source code</h2><?php
    highlight_file("string.php");
    ?>
</body>
</html>
