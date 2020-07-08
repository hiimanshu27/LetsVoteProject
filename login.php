<?php
    session_start();
    
    $link = mysqli_connect( 'localhost', 'root', 'himanshu' );
    mysqli_select_db( $link, 'Demo' );
   
    $_SESSION['username'] = $username;
  
  if (isset($_POST['username']) && isset($_POST['password'])){
      
      if (empty($_POST["username"])){
        $userError = "Username is required";

      } 
    
      else if(empty($_POST["password"])) {
        $passwordError = "Password is required";
      
      }
      else {
        $user=$_POST["username"];
        $pass=$_POST["password"];
        

		    $ret=mysqli_query( $link, "SELECT * FROM User WHERE username='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
		    $row = mysqli_fetch_assoc($ret);
		    if(!$row) {
			    
			    $userError = "Wrong Username or Password";
		      $passwordError = "Wrong Password or Password";
			    
		    }
		else {
	    $_SESSION['loggedin'] = true;
	    $_SESSION['name'] = $user;
	    $ret2=mysqli_query( $link, "SELECT * FROM `Candidates` WHERE username='$user'");
	    $row2 = mysqli_fetch_assoc($ret2);
	    if(!$row2){
	      header("location:voteHere.php");
	      exit;
	    } 
	    else{
			  header('location:voted.php');
			  exit;
	    }
		}
      }
		
    }

    
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>LETS VOTE | LOGIN</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <link rel="stylesheet" href="common.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    
    label{
      font-weight:bold;
      font-size:25px;
    }
    
    .py-5{
      font-weight:bold;
      font-size:25px;
    }
    
    .lead{
      font-weight:bold;
    }
    
  </style>
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

<form method="post">
      <div class="container">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="bootstrap-solid.svg" alt="" width="72" height="72">
          <h2>Log In</h2>
          <p class="lead">Please Login below or <a href="signup.html"> SIGN UP</a></p>
        </div>

    <div class="col-md-6 mb-3">
        <label for="username">User Name</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="" value="" >
        <span class = "error">* <?php echo $userError;?></span>
  
    </div>
          
    <div class="col-md-6 mb-3">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="" value="" >
        <span class = "error">* <?php echo $passwordError;?></span>
     
    </div>
          
    <button name ="submit" class="btn btn-primary btn-lg" type="submit">Login</button>
    </div>
</form>

</body>



</html>