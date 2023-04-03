<?php 
  require('test.php');

  $query = "SELECT * FROM `data` ORDER BY id DESC";
  $sql = mysqli_query($conn, $query);
  $no = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Titip Salam</title>
</head>

<body>
  
  <div class="wrapper">
    <header>
      <nav>
        <div class="main-logo">
          <h1>Welcome</h1>
        </div>
        <div class="navbar">
          <ul>
            <li><a href="#">Kontol</a></li>
            <li><a href="quotes.php">Add a quote</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <iframe style="border-radius:12px"
        src="https://open.spotify.com/embed/playlist/37i9dQZF1DZ06evO09Ahq0?utm_source=generator" width="100%"
        height="152" frameBorder="0" allowfullscreen=""
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      <section>
        <?php
          while($result = mysqli_fetch_assoc($sql)){
        ?>
        <div class="contents blogBox moreBox firstQ">
          <p><span style="display: none;"><?php echo $result['id']; $no++;?></span>" <span><?php
          echo $result['quote']; 
          ?></span> "</p>
          <p><i>by <span id="namaAuthor"><?php echo $result['author']; ?></span></i></p>
        </div>
        <!-- <button id="loadMore"></button> -->
        <?php
          }
        ?>
      </section>
      
    </main>

    <footer>

    </footer>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- <script src="script/load-more-button.js"></script> -->
</body>

</html>