<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #008CBA;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        caption {
            font-size: 24px;
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="student";

        $conn=mysqli_connect($host,$user,$pass,$db);

        if($conn)
            echo "Database is connected";
        else
            echo"Database is not connected";
        
        $sql="SELECT * FROM registration";
        $result = mysqli_query($conn, $sql);
    ?>
    <table>
        <caption>User Data</caption>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
        </tr>
        <?php 
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['user_Password']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
         <?php
            }
        }
        else{
            echo "<tr><td colspan='3'>No record found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
