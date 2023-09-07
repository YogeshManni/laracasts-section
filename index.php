<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
    <style>

    </style>
</head>

<body>

    <h1> Recommended Books </h1>
    <?php 
      $books = [
        "Do Androids Dream of Electronic Sheeps",
        "The Langoliers",
        "Hail Mary",
      ]
          ?>

    <ul>
        <?php
              foreach($books as $book)
              {
                echo "<li>$book</li>";
              }
            ?>
    </ul>
</body>

</html>