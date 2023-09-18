<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet"href="<?php echo get_home_url().'/'.'wp-content/plugins/form-plugin/css/styles.css'?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&family=Lato:wght@700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>User Registration</title>
</head>
<body>
<?php
require('db_connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['id'])){
        // removes backslashes
    $id = stripslashes($_REQUEST['id']);
    $id = mysqli_real_escape_string($con,$id);     
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$department = stripslashes($_REQUEST['department']);
	$department = mysqli_real_escape_string($con,$department);
	$city = stripslashes($_REQUEST['city']);
    $city = mysqli_real_escape_string($con,$city);
    $query = "INSERT into `users` (id,username, department, email, city) VALUES ('$id','$username','$email','$department','city')";
    $result = mysqli_query($con,$query);
        if($result){
            header("Location: http://localhost/wordpress/datatable/"); //Change the URL according to your data table name.
            exit(); 
        }
    }else{
?>
<div class="container">
        <div class="form-box">
            <form name="registration" action="" method="post">
                <input type="text" name="id" placeholder="ID" required />
                <input type="text" name="username" placeholder="Username" required />
                <input type="text" name="email" placeholder="Email" required />
                <input type="text" name="department" placeholder="Department" required />
                <input type="text" name="city" placeholder="City" required />
                <input type="submit" name="submit" value="Register"/> 
            </form>
        </div>
    </div>
<?php } ?>
</body>
</html>
