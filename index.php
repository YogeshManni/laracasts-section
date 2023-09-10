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
        "releaseYear" => "1995",
        "purchaseUrl" => "https://exaampleUrl1.com"
        ],
        [
        "name" => "The Langoliers",
        "author" => "Andy Weir",
        "releaseYear" => "2012",
        "purchaseUrl" => "https://exaampleUrl2.com"
        ],
        [
        "name" => "Hail Mary",
        "author" => "Andy Weir",
        "releaseYear" => "2016",
        "purchaseUrl" => "https://exaampleUrl3.com"
        ]
        
        ];


        $filterBooks =  function ($books, $author)
        {
            $filteredBooks = [];
            foreach($books as $book)
            {
              if($book['author'] === $author)
                  $filteredBooks[] = $book;
            }

            return $filteredBooks;
        };

         $filteredBooks = $filterBooks($books,"Andy Weir");
          ?>

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