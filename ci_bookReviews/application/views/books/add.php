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
               <form action="/books/create_book" method="post">
                   <p>Book Title: <input type="text" name="title" /></p>
                   <p>Choose from Author List</p>
                   <select name="author">

                    <?php foreach ($author as $value)
                    { ?>
                    <option value="<?= $value->id?>">
                  <?=  $value->name; ?>

                     </option>
                <?php   }
                   ?>
                 </option>
                 </select>
                 <p> Or add a new Author:</p>
                 Name: <input type="text" name= "author_name">
                 <input type="submit" value= "Add Book">
               </form>

             <a href="/books/">Go back</a>
        </table>

    </div>

</div> <!-- #main-container -->
</body>
</html>
