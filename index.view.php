
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

    <ul>
        <?php
              foreach($filteredBooks as $book)
              {
                echo "<li> <a href='{$book['purchaseUrl']}'>
                             {$book['name']} (Released in {$book['releaseYear']}) - By {$book['author']}
                           </a>
                      </li>";
              }
            ?>
    </ul>
</body>

</html>