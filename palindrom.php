<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>OUTPUT</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <button type="submit" name="check">Check</button>
    </form>

    <?php
    // Function to check if a number is palindrome
    function isPalindrome($number) {
        // Convert number to string for easier manipulation
        $numberStr = (string) $number;

        // Reverse the string
        $reversedStr = strrev($numberStr);

        // Check if the original and reversed strings are equal
        if ($numberStr === $reversedStr) {
            return true;
        } else {
            return false;
        }
    }

    if(isset($_POST['check'])) {
        $number = $_POST['number'];

        if(is_numeric($number)) {
            if(isPalindrome($number)) {
                echo "<p>$number is a palindrome number.</p>";
            } else {
                echo "<p>$number is not a palindrome number.</p>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?><h2>Source code</h2><?php
    highlight_file("palindrom.php");
    ?>
</body>
</html>
