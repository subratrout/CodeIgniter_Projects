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

          <div class="profile">
            <h2>Micheal Choi</h2>
            <p> Registered at: December 24th 2012 </p>
            <p> User ID: #1</p>
            <p> Email address: michael@village88.com</p>
            <p> Descritpion: I am happy to be here</p>
          </div>

          <div class ="message">
            <h2> Leave a message for Michael</h2>
          <form action=" " method="post">
            <textarea name="message" cols="80" rows="8"></textarea>
          </form>
            <a class="btn btn-sm btn-success" href="#">Post</a>
          </div>

          <div class="post">
            <h4>Mark Guillen Wrote: </h4>
            <p> Hi Michael, I am having fun building BoomYEAH</p>
            <h4>Diana Manlulu Wrote: </h4>
            <p> Awesome</p>
            <form action=" " method="post">
              <textarea name="message" cols="80" rows="8" value="write a message"></textarea>
            </form>
            <a class="btn  btn-sm btn-success" href="#">Post</a>
          </div>

          <div class="post">
            <h4>Mark Guillen Wrote: </h4>
            <p> Hi Michael, I am having fun building BoomYEAH</p>
            <h4>Diana Manlulu Wrote: </h4>
            <p> Awesome</p>
            <form action=" " method="post">
              <textarea name="message" cols="80" rows="8" value="write a message"></textarea>
            </form>
            <a class="btn btn-sm btn-success" href="#">Post</a>
          </div>



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
