<?php
   ob_start();
   session_start();
?>

<?
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		 <link href="styleLogin.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h2>LOGIN</h2> 
      <div>  
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) 
						{
               if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') 
								{
                  $_SESSION['valid'] = true;
                  $_SESSION['username'] = $_POST['username'];  
									$_SESSION['subscription'] = 'argento';
									$_SESSION['poileft'] = 6;
                  echo 'Login effettuato correttamente';
									header('Refresh: 1; URL = index.php');
              	}
							 else
								{
                  $msg = 'Username o password sbagliata!';
              	}
            }
         ?>
      </div>
			<div>
         <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
				 ?>" method = "post">
            <h3>USERNAME</h3>
            <input type = "text" name = "username" required></br>
						<h3>PASSWORD</h3>
            <input type = "password" name = "password" required></br>
            <button class = "loginbtn" type = "submit" name = "login">Submit</button>
						<h4 class = "errori"><?php echo $msg; ?></h4>
						<a href = "logout.php" tite = "Logout">Logout.
         </form>         
      </div> 
	</body>
</html>