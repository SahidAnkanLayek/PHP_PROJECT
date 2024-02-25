
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload and Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="file"] {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }
        input[type="file"]:focus {
            outline: none;
            border-color: #4CAF50;
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
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Output</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required>
            <input type="submit" name="upload" value="Display Image">
        </form>

        <?php
            // Check if the form is submitted and the file is uploaded
        if (isset($_POST['upload']) && isset($_FILES['image'])) {
            $file = $_FILES['image'];

            // Check if file is uploaded without errors
            if ($file['error'] === UPLOAD_ERR_OK) {
                // Define upload directory
                $uploadDir = 'uploads/';

                // Generate unique filename to avoid overwriting existing files
                $fileName = uniqid() . '_' . $file['name'];

                // Move the uploaded file to the upload directory
                if (move_uploaded_file($file['tmp_name'], $uploadDir . $fileName)) {
                    echo '<img src="' . $uploadDir . $fileName . '" alt="Uploaded Image">';
                } else {
                    echo 'Error: Failed to move the uploaded file.';
                }
            } else {
                echo 'Error: File upload failed with error code ' . $file['error'];
            }
        }
        ?><h2>Source code</h2><?php
         highlight_file("imageDisplay.php");
    ?>
        

    </div>
</body>
</html>
