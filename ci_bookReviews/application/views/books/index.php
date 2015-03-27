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
        <h1>books</h1>
        <table>
            <thead>
                <tr>
                    <td>book Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Date Added</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book)
                { ?>
                    <tr>
                        <td><?= $book-> title; ?></td>
                        <td><?= date("F j, Y, g:i a", strtotime($book-> created_at)); ?></td>
                        <td><a href="/books/show/<?= $book-> id ?>">Show</a>|<a href="/books/edit/<?= $book-> id ?>">Edit</a>|<a href="/books/destroy/<?= $book-> id ?>">Delete</a></td>
                    </tr>
             <?php   }
               ?>
             </tbody>

             <a href="/books/add">Add New book</a>
        </table>

    </div>

    <div id="start">
    </div>

    <div id="actitivites">

    </div>

</div> <!-- #main-container -->
</body>
</html>

