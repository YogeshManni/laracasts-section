<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
    <style>
    body {
        display: grid;
        place-items: center;
        height: 100vh;
        font-family: sans-serif;
        margin: 0;
    }
    </style>
</head>

<body>

    <?php 
           $bookName = "Dark Matter";
           $isRead = true;

           if($isRead)
            $message = "You have read $bookName";
           else
            $message = "You have not read $bookName"
        ?>
    <h1>
        <?= $message ?>
    </h1>
</body>

</html>