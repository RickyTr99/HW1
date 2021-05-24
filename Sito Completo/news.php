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
      <script src="carica_news.js" defer="true"></script>
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
        <strong>NEWS</strong><br/>
      </h1>

    </header>


    
    
    <div class="news">
      
        
    </div>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Commenta la Notizia</h2>
                  
            </div>

            <div class="modal-body">
                
          </div>
          
          <div class="commenti">
                
          <h1>Commenti</h1>
                
                <div class="commenti_content">

                </div>
                
                
                <form name="commenta" method="POST" class="form_commenti">
                    <input type="text" name="commento" ><br>
                    <button class="submit" class="invia_commento">invia</button>
                
                
                </form>
            </div>
        </div>

    </div>

  </body>

    <footer>
      <address>Torre Riccardo<address>
      <p>O46002023</p>
    </footer>


</html>