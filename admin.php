<?php
ini_set('display_errors', 0);
// Include the database configuration file
include 'adminconnect.php';
$statusMsg = '';

// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $header = $_POST['header'];
            $content = $_POST['content'];
            $category = $_POST['Category'];
            $DateTime = date("Y/m/d");
            $insert = $con->query("INSERT into images (fileName,header,content,category, DateTime) 
                VALUES ('".$fileName."','".$header."','".mysqli_real_escape_string($con ,$content)."','".$category."', '".$DateTime."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
// echo $statusMsg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

    <div class="nav">
        <a href="admin.php">Upload</a>
        <a href="updateList.php">Update</a>
        <a href="delete.php">Delete</a>
    </div>
    <br> <br>

    <div class="container">
   <center> <form method="post" enctype="multipart/form-data" style="color: pink;">
        Select Image File to Upload:
        <input type="file" name="file">

    <select name="Category" id="Category">
        <option value="blank">--</option>
        <option value="sport">Sports</option>
        <option value="health">Health</option>
        <option value="politic">Politics</option>
        <option value="showbiz">Showbiz</option>
        <option value="business">Business</option>
        <option value="weather">Weather</option>
    </select>
    <br><br>
   
  <p><label for="header">Header Content:</label></p>
  <textarea id="header" name="header" rows="5" cols="50"></textarea> <br><br>

  <p><label for="content">News Content:</label></p>
  <textarea id="content" name="content" rows="20" cols="50"></textarea> <br><br>

        

        <input type="submit" name="submit" value="Upload">
    </form>

 
        
        
    </form></center>
    </div>

</body>
</html>