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
               <h1>Edit Product ID <?= $product->id ?></h1>
              <form action="/products/update/<?= $product->id ?>" method="post">
                   <p><input type="hidden" name="id" value="<?= $product->id?>"/>
                   <p>Name: <input type="text" name="name" value="<?= $product->name; ?>"></p>
                   <p>Description: <textarea name="description"><?= $product->description; ?></textarea></p>
                   <p>Price: <input type="text" name="price" value="<?= $product->price; ?>"></p>
                   <p><input type="submit" value="Update Product" />
              </form>
    </div>

</div> <!-- #main-container -->
</body>
</html>
