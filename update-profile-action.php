<?php 
include 'server.php';
// session_start();
if (isset($_POST['update_profile'])){
    $user = $_GET['user'];
	// $fullname = $_POST['fullname'];
	// $age = $_POST['age'];
	// $gender = $_POST['gender'];
	$email = $_POST['email'];
	// $user['username'] = $use;
	$update_profile = "UPDATE users SET email = '$email' WHERE username = '$username'";
	// $result = $db->query($update_profile);

	// $result->execute(array('$username' => $_GET['user']));
	$result = mysqli_query($db, $update_profile);

	if ($result) {
		// $_SESSION['username'] = $username;
		// $_SESSION['success'] = "Record updated successfully";
		// header("Location: profile.php?user=$user");
	  // header('location: index.php');
	//   header('location: main.php');
		echo "Record updated successfully";
		header("Location: profile.php?user=$user");
		

			
	} else {
		echo "Error updating record: " . mysqli_error($db);
	}
	
}
	// $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

	// header("Location: main.php?user=$username");
 	//
// $update_profile = $mysqli->query("UPDATE users SET full_name = '$fullname',
// gender = '$gender', age = $age, address = '$address'
// WHERE username = '$user'");	    
// 	if ($update_profile) {
// 			   
// 		header("Location: profile.php?user=$user");
// 		    
// 	} else {
// 			  echo $mysqli->error;
// 		    }
// }	

// if($update_profile){
		

// 	header("Location: profile.php?user=$user");
// 	} 
// mysqli_close($db);
?>