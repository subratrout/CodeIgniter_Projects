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
          <a class="navbar-brand" href="#">Dashboard</a>
          <a class="navbar-brand" href="#">Profile</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="/main/signin" method="post" class="navbar-form navbar-right">
            <button type="submit" class="btn btn-success">Log Off</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
<!--     <div class="jumbotron">
      <div class="container">
        <h1>Welcome to the Test!</h1>
        <p>We are going to build a cool appication using MVC framework! This application was built with the Village88 folks!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Start &raquo;</a></p>
      </div>
    </div> -->

    <div class="container">
      <!-- Example row of columns -->
      <h1>Manage Users</h1>
      <a class="btn btn-primary" href="#">Add new</a>
      <div class="row">
        <table>
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Created At</td>
              <td>user_level</td>
              <td>actions</td>
            </tr>
          </thead>
          <tbody>
             <tr>
              <td>1</td>
              <td>Michael Choi</td>
              <td>michael@village88.com</td>
              <td>Dec 24th 2012</td>
              <td>admin</td>
              <td><a href=" ">edit</a> | <a href=" ">remove</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Michael Choi</td>
              <td>michael@village88.com</td>
              <td>Dec 24th 2012</td>
              <td>admin</td>
              <td><a href=" ">edit</a> | <a href=" ">remove</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Michael Choi</td>
              <td>michael@village88.com</td>
              <td>Dec 24th 2012</td>
              <td>admin</td>
              <td><a href=" ">edit</a> | <a href=" ">remove</a></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Michael Choi</td>
              <td>michael@village88.com</td>
              <td>Dec 24th 2012</td>
              <td>admin</td>
              <td><a href=" ">edit</a> | <a href=" ">remove</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      <hr>

      <footer>
        <p>&copy; Village88</p>
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
