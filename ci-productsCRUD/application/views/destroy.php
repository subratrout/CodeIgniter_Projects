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



<h1 class='head'>Course: CodeIgniter</h1>
<div class="main-container">

    <div id="Courses">
        <h3>Are you sure you want to delete the following course?</h3>
        <p>Name: <?= $course->name?></p>
        <p>Description: <?= $course->description?></p>

        <a class='no' href="/courses">No</a>
        <a class='yes' href="/courses/delete/<?= $course-> id ?>">Yes! I want to delete this</a>
    </div>

</div> <!-- #main-container -->
</body>
</html>


