<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Semi-RESTful Routes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>

<h1 class='head'>books Page: CodeIgniter</h1>
<div class="main-container">
    <div id="books">
               <h1>Edit book ID <?= $book->id ?></h1>
              <form action="/books/update/<?= $book->id ?>" method="post">
                   <p><input type="hidden" name="id" value="<?= $book->id?>"/>
                   <p>Name: <input type="text" name="name" value="<?= $book->title; ?>"></p>
                   <p><input type="submit" value="Update book" />
              </form>
    </div>

</div> <!-- #main-container -->
</body>
</html>