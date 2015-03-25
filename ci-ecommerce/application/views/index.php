<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>User Dashboard in CodeIgniter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
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
        <h1>Welcome to the Test!</h1>
        <p>We are going to build a cool appication using MVC framework! This application was built with the Village88 folks!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Start &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Manage Users</h2>
          <p>Using this application, you'll learn how to add, remove, and edit users for the application. </p>
        </div>
        <div class="col-md-4">
          <h2>Leave messages</h2>
          <p>Users will be able to leave a message to another user using this application. </p>
       </div>
        <div class="col-md-4">
          <h2>Edit User Information</h2>
          <p>Admins will be able to edit another user's information(email address, first name, last name, etc).</p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->
</body>
</html>
