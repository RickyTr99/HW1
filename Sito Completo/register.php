<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username=mysqli_real_escape_string($conn,$_POST["username"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);
	$cpassword=mysqli_real_escape_string($conn,$_POST["password2"]);
	

	if ($password == $cpassword) {
		$password = password_hash($password, PASSWORD_BCRYPT);
		$cpassword= password_hash($cpassword, PASSWORD_BCRYPT);
		$sql = "SELECT * FROM SQUADRA WHERE Nome_Squadra='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO SQUADRA (Nome_Squadra, password)
					VALUES ('$username', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registrazione Completata')</script>";
				$username = "";
				$_POST['password'] = "";
				$_POST['password2'] = "";
				header("Location: login.php");
			} else {
				echo "<script>alert('Qualcosa è andato storto')</script>";
			}
		} else {
			echo "<script>alert('Questo username esiste già')</script>";
		}
		
	} else {
		echo "<script>alert('Le password non coincidono')</script>";
	}
}

?>


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
          <a href="http://localhost/progetto/login.php" class="button">Accedi</a>
        </div>
      </nav>

    </header>

	<div class="container">
		<form action="" method="POST" class="login">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registrati</p>
			<div class="input-group">
				<input type="text" pattern="[A-Za-z0-9]{6,20}$" title="L'username deve contenere solo caratteri alfanumerici, deve avere una lunghezza minima di 6 e massima di 20" placeholder="Nome Squadra" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$" title="La password deve contenere minimo 8, massimo 20 caratteri tra cui: una lettera maiuscola, una minuscola, un numero e un carattere speciale" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$" title="La password deve contenere minimo 8, massimo 20 caratteri tra cui: una lettera maiuscola, una minuscola, un numero e un carattere speciale" placeholder="Ripeti la Passoword" name="password2" value="<?php echo $_POST['password2']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Registrati</button>
			</div>
			<p class="login-register-text">Hai già un account? <a href="login.php">Accedi Qui</a>.</p>
		</form>
	</div>
</body>
<footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>
</html>