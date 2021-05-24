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
    <script src="carica_spec.js" defer="true"></script>
</head>
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

      <h1>
        <strong>SPECIALITÀ</strong><br/>
      </h1>

    </header>


    <section>
      <div class="hidden">
        
        <h1>Specialità preferite</h1>

        <div class="preferiti">

        </div>
          
      </div>

        <div id="ricerca">
           <h1>Specialità</h1>
              <div>
             Cerca: <input type="text" id="cerca" name="cerca">
              </div>

        </div>

        <div class="specialità" >

        </div>

        <p id="risultato" class="hidden"> Nessuna corrispondenza</p>


    </section>
    
    
       <footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>
  </body>
</html>