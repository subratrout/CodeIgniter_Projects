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
<?php

 ?>



<h1 class='head'>Ninja Gold Game: CodeIgniter</h1>
<div class="main-container">
    <div id="gold-score">
        <h1>Your Gold:</h1>
        <h2><?php echo $this->session->userdata('total_gold'); ?></h2>
    </div>
    <div id="gold-box">
        <div class="gold gold-farm">
            <h2>Farm</h2>
            <h3>(Earns 10-20 golds)</h3>
            <form action="/process_money" method="post">
                <input type="submit" class = 'btn' value="Find Gold!">
                <input type="hidden" name="building" value="farm">
            </form>
        </div>
         <div class="gold gold-cave">
            <h2>Cave</h2>
            <h3>(Earns 5-10 golds)</h3>
            <form action="/process_money" method="post">
                <input type="submit" class = 'btn' value="Find Gold!">
                <input type="hidden" name="building" value="cave">
            </form>
        </div>
         <div class="gold gold-house">
            <h2>House</h2>
            <h3>(Earns 2-5 golds)</h3>
            <form action="/process_money" method="post">
                <input type="submit" class = 'btn' value="Find Gold!">
                <input type="hidden" name="building" value="house">
            </form>
        </div>
         <div class="gold gold-casino">
            <h2>Casino</h2>
            <h3>(Earns/takes 0-50 golds)</h3>
            <form action="/process_money" method="post">
                <input type="submit" class = 'btn' value="Find Gold!">
                <input type="hidden" name="building" value="casino">
            </form>
        </div>
    </div>

    <div id="start">
          <form action="/process_money" method="post">
                <input type="submit" class = 'btn-start' value="Start Over">
                <input type="hidden" name="action" value="start">
          </form>
    </div>

    <div id="actitivites">
        <h1>Activities: </h1>
        <div class="message">

            <?php
            foreach ($results as $key => $value) {
                echo $value;
            } ?>
                       </div>
    </div>

</div> <!-- #main-container -->
</body>
</html>

