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




<h1 class='head'>Random Word Generator</h1>
<div class="main-container">
    <h2>Random Word (attempt # <?= $this->session->userdata("counter") ?>)</h2>
    <div id="word">
        <h1>Random Word: <?= $word; ?></h1>
    </div>
    <a href="/main" class ='btn'>Generate</a>

</div> <!-- #main-container -->
</body>
</html>

