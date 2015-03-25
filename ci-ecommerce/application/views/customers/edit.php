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

          <div class="user">
            <h1> Edit user #[user_id] </h1>
            <div class="user-info">
              <h3>Edit Information</h3>
              <form action="$" method="post">
                 Email Address: <input type="text" name="email" value="email_address of the user"/><br>
                First Name: <input type="text" name="first_name" value="first_name of the user"/><br>
                Last Name: <input type="text" name="last_name" value="last_name of the user"/><br>
                User Level:
                <select>
                  <option>Admin</option>
                  <option>Normal</option>
               </select>
              </form>
              <a class="btn  btn-sm btn-success" href="#">Update User Info</a>
            </div>

            <div class="password-info">
              <h3>Update Password:</h3>
              <form action="$" method="post">
                 Password: <input type="text" name="password" value=""/><br>
                 Password Confirmation: <input type="text" name="password_confirmation" value=""/><br>
              </form>
              <a class="btn  btn-sm btn-success" href="#">Update Password</a>
            </div>
          </div>

      </div> <!-- /container -->

</body>
</html>
