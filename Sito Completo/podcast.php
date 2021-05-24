<?php

include 'auth.php';
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>CDS</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <script src="script podcast.js" defer="true"></script>
</head>
<meta name="viewport"content="width=device-width, initial-scale=1">
  <body>
    <header>      
      <nav>
        <div id="logo">
          Fidal Italia
        </div>
        <div id="links">
          <?php
          
            if (checkAuth()) {
              $username= $_SESSION["username"];
              echo "
              <a href='http://localhost/progetto/homelogin.php'>Home</a>
              <a href='http://localhost/progetto/specialità.php'>Specialità</a>
              <a href='http://localhost/progetto/orario.php'>Orario</a>
              <a href='http://localhost/progetto/podcast.php'>Podcast</a>
              <a class='button' href='http://localhost/progetto/logout.php'>Logout</a>";
          }else{
            echo "
            <a href='http://localhost/progetto/home.php'>Home</a>
            <a href='http://localhost/progetto/podcast.php'>Podcast</a>
            <a class='button' href='http://localhost/progetto/register.php'>Iscrivi la tua Squadra</a>";
          }
          ?>
        </div>
      </nav>

    </header>

      <h1>Il Podcast Consigliato</h1>

      <section id='Podcast'>
 


      </section>
    
    
    <footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>
  </body>
</html>