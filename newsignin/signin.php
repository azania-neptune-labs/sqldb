<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
    .modal-body input
    {
      width: 50%;
      align-content: center;
    }
    
    h4
    {
      text-align: center;
    }

  </style>

</head>
<body>

<form method="post" action="sign.php">
<div class="container">
  <h2>Login modal</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Login
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Digital studio login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
       <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" name="username" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" name="password"  class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

        <input type="submit" name="submit"><br><br>
        <a href="#">Not yet a member</a>

      </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</form>
</body>
</html>

<!--   <?php
            $con/* = mysqli_connect("localhost","root","","bestsofar");
           if(isset($_POST['Login'])){

		$EMAIL = mysqli_real_escape_string($con, $_POST['username']);
		$USER_PASSWORD = mysqli_real_escape_string($con, $_POST['password']);

		$SQL = "SELECT * FROM 'login' 
				    WHERE username = '$username' and password = '$password'";

	    	$Cresults = mysqli_query($con, $SQL);

	    if(mysqli_num_rows($Cresults) > 0){
            	echo "Successfully Logged in";
            	header("Location:load.php");
        }
        else
        {
            echo "Error", mysqli_error($con);
        }
        
	}*/
         ?> -->