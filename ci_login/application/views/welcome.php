<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login and Registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
</head>
<body>

<h1 class='head'>Welcome: <?= $this->session->userdata('first_name') ?></h1>
<div class='logoff'><a href="/users/logout">Log Off</a>
    </div>
<div class="box">
        <h3> User Information: </h3>
       <p> First Name: <?= $this->session->userdata('first_name') ?></p>
       <p> Last Name: <?= $this->session->userdata('last_name') ?></p>
       <p> Email address: <?= $this->session->userdata('user_email') ?></p>
</div>

</body>
</html>
