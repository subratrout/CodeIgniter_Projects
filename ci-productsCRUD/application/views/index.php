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
        <h1>Products</h1>
        <table>
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Date Added</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product)
                { ?>
                    <tr>
                        <td><?= $product-> name; ?></td>
                        <td><?= $product-> description; ?></td>
                        <td><?= $product-> price; ?></td>
                        <td><?= date("F j, Y, g:i a", strtotime($product-> created_at)); ?></td>
                        <td><a href="/products/show/<?= $product-> id ?>">Show</a>|<a href="/products/edit/<?= $product-> id ?>">Edit</a>|<a href="/products/destroy/<?= $product-> id ?>">Delete</a></td>
                    </tr>
             <?php   }
               ?>
             </tbody>

             <a href="/products/add">Add New Product</a>
        </table>

    </div>

    <div id="start">
    </div>

    <div id="actitivites">

    </div>

</div> <!-- #main-container -->
</body>
</html>

