<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>OUTPUT:-</h2>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="operator">Select operator:</label>
        <select id="operator" name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        switch($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                // Check if divisor is not zero
                if($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operator";
        }
        echo "<p>Result: $result</p>";
    }
    ?><h2>Source code</h2><?php
        highlight_file("leapyear.php");
    ?>
</body>
</html>
