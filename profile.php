<?php 
// include('server.php') 
?>

<?php 
include 'server.php';

if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = mysqli_query($db,"SELECT * FROM users WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    // session_start();
    $profile_data = $get_user->fetch_assoc();
           
}
       
} 
?>
<!DOCTYPE html>
<html>    
<head>        
	<meta charset="UTF-8">
            <title><?php echo $profile_data['username'] ?>'s Profile</title>
            <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <a href="index.php">Home</a> | <?php echo $profile_data['username'] ?>'s Profile        
        <h3>Personal Information |  
    </div>   
    <div style="
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    /* padding: 299990px; */
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;">
        <?php
        $visitor = $_SESSION['username'];
            if ($user == $visitor){ ?>            
            <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a>            
        <?php } ?>        
        
        </h3>        
            <table>
                        <tr>                
                            <td>Email Address:</td><td><?php echo $profile_data['email'] ?></td>   
                        </tr>
                            
            </table> 
    </div>
    </body>
</html> 
