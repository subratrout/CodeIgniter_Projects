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

<h1 class='head'>Products Page: CodeIgniter</h1>
<div class="main-container">
    <div id="products">
               <h1>Book ID <?= $book->id ?></h1>
               <p>Name: <?= $book->title; ?></p>
               <p>Created At: <?= $book->created_at; ?></p>

             <a href="/books/">Go back</a>|<a href="/books/edit/<?=$book->id?>">Edit</a>
        </table>

    </div>

</div> <!-- #main-container -->
</body>
</html>

