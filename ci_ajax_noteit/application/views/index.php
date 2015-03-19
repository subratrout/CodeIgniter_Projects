<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Note in CodeIgniter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
     <script>
        $(document).ready(function(){
            $.get('/notes/index_html', function(res) {
              $('#notes').html(res);
            });

            $('form').submit(function(){
              $.post('/notes/create', $(this).serialize(), function(res){
                $('#notes').html(res);
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
        <h2>Welcome to Note It Wall</h2>
        <h1>Notes</h1>

        <div id="notes">
        </div>

        <form action="/notes/create" method="post">
          <p>
            <label>Note: </label>
            Title: <input type="text" name="title" value="insert your title here">
            Description: <textarea name="description"> Add your description here.</textarea>
          </p>
          <input type="submit" value="Add Note">
        </form>
      </div>
    </div>
</body>
</html>

