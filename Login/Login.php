
<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 



// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  
  if (empty($username)) { 
    //array_push($errors, "Username is required"); 
    echo("Username is required\n");
  }
  else if (empty($email)) { 
    //array_push($errors, "Email is required"); 
    echo("Email is required\n");
  }
  else if (empty($password_1)) { 
    //array_push($errors, "Password is required"); 
    echo("Password is required\n");
  }
  else if ($password_1 != $password_2) {
  //array_push($errors, "The two passwords do not match");
  echo("The two passwords do not match\n");
  }

  
  //if (count($errors) == 0) 
  else
  {
  	
    echo("You are registered");
    
  }
}

if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username)) {
    //array_push($errors, "Username is required");
    echo("Username is required\n");
  }
  else if (empty($password)) {
    //array_push($errors, "Password is required");
    echo("Password is required\n");
  }

  //if (count($errors) == 0) 
  else{
  	echo("You are Logged In");
  }
}
?>