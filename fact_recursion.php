<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive Factorial Calculator</title>
</head>
<body>
   <h2>Output</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required><br><br>
        <button type="submit" name="calculate">Calculate Factorial</button>
    </form>

    <?php
    // Function to calculate factorial recursively
    function factorial($n) {
        if ($n <= 1) {
            return 1; // Base case: factorial of 0 or 1 is 1
        } else {
            return $n * factorial($n - 1); // Recursive call to calculate factorial
        }
    }

    if(isset($_POST['calculate'])) {
        $number = $_POST['number'];

        if(is_numeric($number) && $number >= 0) {
            $result = factorial($number);
            echo "<p>The factorial of $number is $result.</p>";
        } else {
            echo "<p>Please enter a valid non-negative integer.</p>";
        }
    }
    ?><h2>Source code</h2><?php
    highlight_file("fact_recursion.php");
    ?>
</body>
</html>
