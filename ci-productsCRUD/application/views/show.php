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
               <h1>Product ID <?= $product->id ?></h1>
               <p>Name: <?= $product->name; ?></p>
               <p>Name: <?= $product->description; ?></p>
               <p>Name: <?= $product->price; ?></p>
               <p>Name: <?= $product->created_at; ?></p>

             <a href="/products/">Go back</a>|<a href="/products/edit/<?=$product->id?>">Edit</a>
        </table>

    </div>

</div> <!-- #main-container -->
</body>
</html>

