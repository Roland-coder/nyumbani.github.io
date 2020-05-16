
<?php
include('../server.php');
// include '../Second version\server.php';
// function addHouse{

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $contact = $_POST["beds"];
    $file = $_FILES['file'];

    // $fileName = $_FILES['file']['name'];
    // $fileTmpName = $_FILES['file']['tmp_name'];
    // $fileSize = $_FILES['file']['sizee'];
    // $fileError = $_FILES['file']['error'];
    // $fileType = $_FILES['file']['type'];


    $filename = $_FILES['file']['name'];
    $filetmpname = $_FILES['file']['tmp_name'];
    //folder where images will be uploaded
    $folder = 'imagesuploadedf/';
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder.$filename);
    //inserting image details (ie image name) in the database
    // $sql = "INSERT INTO `images` (`name`)  VALUES ('$filename')";
    $query = "INSERT INTO `addagent` (`name`, `contact`,  `image`) VALUES('$name', '$contact', '$filename')";
    mysqli_query($db, $query);
    if( $query) {
        header('location: admin.php?uploadsuccess');
    // $qry = mysqli_query($db,  $sql);
    
        echo "image uploaded";
    }


    
  

}



?>

