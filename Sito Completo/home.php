<?php

include 'auth.php';
if (checkAuth()) {
	header('Location: homelogin.php');
	exit;
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>CDS</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <script src="carica_news.js" defer="true"></script>
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

      <h1>
        <strong>Campionati di Società</strong><br/>
      </h1>

    </header>
    <section>
      <div id="main">
          <h1>Accedi di seguito per gestire la tua società</h1>
          <a class="button1" href="http://localhost/progetto/login.php">ACCEDI</a>
          <p><em>Osserva le potenzialità della nostra piattaforma<em></p>
              
      
      </div>
        <div class="news">
        
      </div>


    </section>
    <footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>
  </body>
</html>


