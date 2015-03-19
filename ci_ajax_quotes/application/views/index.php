<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>User Dashboard in CodeIgniter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
     <script>
        $(document).ready(function(){
            $.get('/quotes/index_html', function(res) {
              $('#quotes').html(res);
            });

            $('form').submit(function(){
              $.post('/quotes/create', $(this).serialize(), function(res){
                $('#quotes').html(res);
              });
              return false;
            });
        });
    </script>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Test App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="/main/signin" method="post" class="navbar-form navbar-right">
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to Quotes</h1>
        <h1>Quotsy</h1>

        <form action="/quotes/create" method="post">
          <p>
            <label>Author: </label>
            <input type="text" name="author">
          </p>
          <p>
            <label>Quote: </label>
            <textarea name="quote"></textarea>
          </p>
          <input type="submit" value="Add Quote">
        </form>
              <button id="get_all_button">Get All Quotes</button>
              <div id="quotes">
              </div>
      </div>
    </div>

    <div class="container">

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

