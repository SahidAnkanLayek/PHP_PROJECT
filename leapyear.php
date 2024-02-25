<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Display</title>

</head>

<body>
    <h1>Write a program to check a year is leap year or not</h1><br>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leap Year Checker</title>
    </head>
    <body>
        <h2>OUTPUT:-</h2>
        <!-- Form to input the year -->
        <form method="post" action="">
            <label for="year">Enter the year:</label>
            <input type="number" id="year" name="year" min="0" required>
            <button type="submit">Check</button>
        </form>
        <?php 
        // Function to check if a year is a leap year
        function isLeapYear($year)
        {
            // A year is a leap year if it is divisible by 4,
            // except for years that are divisible by 100.
            // However, years divisible by 400 are still leap years.
            return ($year % 4 == 0) && ($year % 100 != 0 || $year % 400 == 0);
        }

        // Check if the form is submitted and the year is provided
        if (isset($_POST['year'])) {
            // Get the year from the form
            $year = $_POST['year'];

            // Validate if the input is a valid year
            if (is_numeric($year) && strlen($year) == 4 && $year > 0) {
                // Check if it's a leap year
                if (isLeapYear($year)) {
                    echo "<p>$year is a leap year.</p>";
                } else {
                    echo "<p>$year is not a leap year.</p>";
                }
            } else {
                echo "<p>Please enter a valid year.</p>";
            }
        }
        ?><h2>Source code</h2><?php
        highlight_file("leapyear.php");
        ?>

    </body>

    </html>