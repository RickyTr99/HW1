<?php 

include 'auth.php';
if (checkAuth()) {
	header('Location: homelogin.php');
	exit;
}

error_reporting(0);

if(!empty($_POST["username"]) && !empty($_POST["password"]))
{
  
  $username=mysqli_real_escape_string($conn,$_POST["username"]);
  $password=mysqli_real_escape_string($conn,$_POST["password"]);
  $query="SELECT Nome_Squadra,Password,ID FROM  squadra WHERE Nome_Squadra='$username'";
  $res= mysqli_query($conn,$query) or die(mysqli_error($conn));;
  if(mysqli_num_rows($res)>0)
  {
   $entry = mysqli_fetch_assoc($res);
   if (password_verify($password, $entry['Password'])) {
	 $_SESSION["username"]=$_POST["username"];
	 $_SESSION['log']=$entry['ID'];
	 header("Location: homelogin.php");
	 mysqli_free_result($res);
	 mysqli_close($conn);
	 exit;
   }
   else{
	echo "<script>alert('Nome Squadra o Password sbagliata')</script>";
   }
  }
  else{
	echo "<script>alert('Nome Squadra o Password sbagliata')</script>";
  }
	 
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>CDS</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport"content="width=device-width, initial-scale=1">
</head>
<body>

<header>      
      <nav>
        <div id="logo">
          Fidal Italia
        </div>
        <div id="links">
          <a href="http://localhost/progetto/home.php">Home</a>
          <a href="http://localhost/progetto/podcast.php">Podcast</a>
		  <a class="button" href="http://localhost/progetto/register.php">Iscrivi la tua Squadra</a>
        </div>
      </nav>

    </header>


	<div class="container">
		<form action="" method="POST" class="login">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="text" placeholder="Nome Squadra" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Non hai un account? <a href="register.php">Clicca qui per registrarti</a>.</p>
		</form>
	</div>
</body>
<footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>
</html>
