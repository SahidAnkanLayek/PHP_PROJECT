<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="n1"><br><br>
        <label>Password:</label><br>
        <input type="password" name="n2"><br><br>
        <label>Email:</label><br>
        <input type="email" name="n5"><br><br>
        <label>Gender:</label><br>
        <input type="text" name="n3"><br><br>
        <label>DOB:</label><br>
        <input type="date" name="n4"><br><br>
        <input type="submit" name="b1">
    </form>
</body>
</html>
