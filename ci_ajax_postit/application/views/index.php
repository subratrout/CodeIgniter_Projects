<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Dashboard in CodeIgniter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
     <script>
        $(document).ready(function(){
            $.get('/posts/index_html', function(res) {
              $('#posts').html(res);
            });

            $('form').submit(function(){
              $.post('/posts/create', $(this).serialize(), function(res){
                $('#posts').html(res);
              });
              return false;
            });
        });
    </script>
</head>
<body>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2>Welcome to Post It Wall</h2>
        <h1>Posts</h1>

        <div id="posts">
        </div>

        <form action="/posts/create" method="post">
          <p>
            <label>Post: </label>
            <textarea name="description"></textarea>
          </p>
          <input type="submit" value="Add Post">
        </form>
      </div>
    </div>


</body>
</html>

