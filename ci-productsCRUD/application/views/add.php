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
               <form action="/products/create" method="post">
                   <p>Name: <input type="text" name="name" /></p>
                   <p>Description: <textarea name= "description"></textarea></p>
                   <p>Price: <input type="text" name="price" /></p>
                   <input type="submit" value= "Add"/>
               </form>

             <a href="/products/">Go back</a>|<a href="/products/edit/<?=$product->id?>">Edit</a>
        </table>

    </div>

</div> <!-- #main-container -->
</body>
</html>
