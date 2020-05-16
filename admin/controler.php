
<?php
include('../server.php');
// include '../Second version\server.php';

if(isset($_POST['submit'])){
    $price = mysqli_real_special_string($db, $_POST["price"]);
    $beds = mysqli_real_special_string($db, $_POST["beds"]);
    $location = mysqli_real_special_string($db, $_POST["location"]);
    $size = mysqli_real_special_string($db, $_POST["size"]);
    $query = "INSERT INTO addhouse(price, beds, location, size) VALUES('$price', '$beds', '$location', '$size')";
    mysqli_query($db, $query);
    header('location: index.php');

}
?>
