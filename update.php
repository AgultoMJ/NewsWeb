<?php
// Include the database configuration file
include "adminconnect.php";

$ID = $_GET['ID'];
// echo $ID;

$sql = "SELECT * FROM   images  WHERE ID = $ID ";
$result = mysqli_query ($con, $sql);

$row = mysqli_fetch_assoc($result);

$header = $row['header'];
$fileName = $row['filename'];
$content = $row['content'];
$DateTime = $row['DateTime'];
$category = $row['category'];



$statusMsg = '';




if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // File upload path
    $targetDir = "images/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

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
            $insert = $con->query("UPDATE images SET filename = '".$fileName."', 
                header = '".mysqli_real_escape_string($con ,$header)."', content = '".mysqli_real_escape_string($con ,$content)."', category = '".$category."' WHERE ID = '".$ID."'");

            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
    }
}else{
    $statusMsg = "Please select a file to upload.";
}

// Display status message
echo $statusMsg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    
</head>
<body>

    <form method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file" >

    <select name="Category" id="Category">
        <option value="<?php echo $category ?>" hidden><?php echo $category ?></option>
        <option value="sport">Sports</option>
        <option value="health">Health</option>
        <option value="politic">Politics</option>
        <option value="showbiz">Showbiz</option>
        <option value="business">Business</option>
        <option value="weather">Weather</option>
    </select>
    <br>
   
  <p><label for="header">Header Content:</label></p>
  <textarea id="header" name="header" rows="5" cols="50"><?php echo $header ?></textarea> <br><br>

  <p><label for="content">News Content:</label></p>
  <textarea id="content" name="content" rows="20" cols="50"><?php echo $content?></textarea> <br><br>

        

        <input type="submit" name="submit" value="Upload">
    </form>
        
        
    </form>

</body>
</html>