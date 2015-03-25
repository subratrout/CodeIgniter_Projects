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
      <div class="container">
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
                <form action="/users/logout" method="post" class="navbar-form navbar-right">
                  <button type="submit" class="btn btn-success">Log Off</button>
                </form>
              </div><!--/.navbar-collapse -->
            </div>
          </nav>
         <div class="user-name" ><p>Hello <?= $this->session->userdata('user_name'); ?></p></div>



      </div> <!-- /container -->

</body>
</html>
