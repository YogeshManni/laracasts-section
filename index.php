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

        [
        "name" => "Do Androids Dream of Electronic Sheeps",
        "author" => "Philip K. Dick",
        "purchaseUrl" => "https://exaampleUrl1.com"
        ],
        [
        "name" => "The Langoliers",
        "author" => "Andy Weir",
        "purchaseUrl" => "https://exaampleUrl2.com"
        ],
        [
        "name" => "Hail Mary",
        "author" => "Mary M. Coeheler",
        "purchaseUrl" => "https://exaampleUrl3.com"
        ]
        
        ];
          ?>

    <ul>
        <?php
              foreach($books as $book)
              {
                echo "<li> <a href='{$book['purchaseUrl']}'>
                             {$book['name']}
                           </a>
                      </li>";
              }
            ?>
    </ul>
</body>

</html>