<?php
include_once 'adminconnect.php';
$sql = "DELETE FROM images WHERE ID='" . $_GET["ID"] . "'";
if (mysqli_query($con, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

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

    <h2 style="margin-top: 50px;color: yellow;"><center>Delete Content:</center></h2>
    <div class="container"><br><br> 

        <div class="form-group ">
                <center><label style="color:pink;">Input ID:</label>
                <input type="number" name="Delete" class="form-control" value="" maxlength="30" required=""></center><br> 
                <span class="text-danger"><?php if (isset($ID_error)) echo $ID_error; ?></span>
            </div>
          <center> <input type="submit" class="delete" name="Delete" value="Delete"> </center>
>
    </div>

</body>
</html>