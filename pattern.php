 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Display</title>
    
      
    
</head>
<body>
    <u><h1>Create a pattern program</h1></u>
   
    <h2>Source Code:</h2>
    <?php
        if(isset($_POST['submit'])) {
             $n = $_POST['num'];
             if($n>0){
                for($i=0;$i<=$n;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo($j%2);
                    }
                    echo "<br>";
                }
             }else{
                echo "Invalid Input";
             }
        }
        highlight_file("pattern.php");
     ?>
     <h2>OUTPUT:-</h2>
     <form  action="" method="post">
        <label>Enter the Nunber:</label>
        <input type="number" name="num"><br><br>
        <input type="submit" name="submit">
    </form> 
</body>
</html>
           


    

   