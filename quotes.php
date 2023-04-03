<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
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
            <li><a href="#">Titid</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <form action="eksekusi.php" method="post" class="quotes">
        <textarea name="quote" id="quote" placeholder="Quotes kamu" required></textarea>
        <input name="author" type="text" id="author" placeholder="Author" required>
        <button type="submit" name="submit">Submit</button>
      </form>
    </main>
  </div>
</body>

</html>