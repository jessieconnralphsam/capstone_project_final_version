<?php 
  session_start();
  if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { 
?>
<?php
if (isset($_SESSION['registration_success']) && $_SESSION['registration_success'] === true) {
	echo '<div id="registrationSuccess" class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px; max-width: 400px; margin-left: auto; margin-right: auto;">
            <strong>Success!</strong> Registration completed successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    unset($_SESSION['registration_success']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Hydroponics</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	  <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
	  	<form class="p-5 shadow-none" 
	  	      action="auth.php"
	  	      method="post" 
	  	      style="width: 30rem">
			<div class="d-flex justify-content-center">
				<div class="mx-auto">
					<img src="assets/img/backgrounds/hydroponicslogo.jpeg" alt="Description of the image" width="100" height="100">
				</div>
			</div>
			<h5 class="text-center">NFT HYDROPONICS DECISION SUPPORT SYSTEM</h5>
	  		<?php if (isset($_GET['error'])) { ?>
	  		<div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error'])?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
			<br>
			<br>
		    <input type="email" 
		           name="email" 
				   placeholder="Email"
		           value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" 
		           class="form-control" 
		           id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  
		  <div class="mb-3">
		    <input type="password" 
		           class="form-control" 
		           name="password" 
				   placeholder="Password"
		           id="exampleInputPassword1">
		  </div>
		  <button type="submit" 
		          class="btn btn-primary btn-sm">LOGIN
		  </button>
		  <button type="button" 
		  		  class="btn btn-primary btn-sm" onclick="redirectToPage()">REGISTER 
		  </button>
		  <button type="button" 
		  		  class="btn btn-danger btn-sm" onclick="redirectToForgotPassword()">FORGOT PASSWORD
		  </button>
		</form>
	  </div>

<script>
function redirectToPage() {
    window.location.href = "register.php";
}
function redirectToForgotPassword() {
    window.location.href = "forgot.php";
}
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
}else {
   header("Location: php/ph.php");
}
?>
