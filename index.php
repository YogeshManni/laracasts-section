
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


        $filterItems =  function($items, $fn)
        {
            $filteredItems = [];
            foreach($items as $item)
            {
              if($fn($item))
              {
                  $filteredItems[] = $item;
              }
            }

            return $filteredItems;
        };

         $filteredBooks = $filterItems($books,function($book)
        {
            return $book['releaseYear'] > 1995;
        });

        require "index.view.php"
?>