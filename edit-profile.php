<?php 
// include('server.php') 
?>

<?php 
include 'server.php';
// session_start();
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = mysqli_query($db,"SELECT * FROM users WHERE username = '$user'");
$user_data = $get_user->fetch_assoc();
} else {
	//    header("Location: main.php");
}?>

<!DOCTYPE html>
<html>
    <head>  
	<meta charset="UTF-8">
		<title><?php echo $user_data['username'] ?>'s Profile Settings</title>
		<link rel="stylesheet" type="text/css" href="style.css">
    </head> 
	<body> 
		<div class="header">       
			<a href="index.php">Home</a> | Back to <a href="profile.php?user=<?php echo $user_data['username'] ?>"><?php echo $user_data['username'] ?></a>'s Profile        
			<h3>Update Profile Information</h3> 
		</div>
		       <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>" style="
				
				width: 30%;
				margin: 0px auto;
				padding: 20px;
				/* padding: 299990px; */
				border: 1px solid #B0C4DE;
				background: white;
				border-radius: 0px 0px 10px 10px;">            			 
			         
			         <label>Email Address:</label><br>
			         <input type="text" name="email" value="<?php echo $user_data['email'] ?>" /><br> 
			         <input type="submit" name="update_profile" value="Update Profile" />        
		</form>    
	</body>
</html>