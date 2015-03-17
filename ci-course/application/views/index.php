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

<h1 class='head'>Course: CodeIgniter</h1>
<div class="main-container">
    <div id="form">
        <h1>Add a new course:</h1>
        <form action="/courses/add" method="post">
            Name:<br>
            <input type="text"  name ="name">
            Description:<br>
            <textarea rows="4" name="description"></textarea>
            <input type="submit" class = 'btn' value="Add">
        </form>
    </div>
    <div id="Courses">
        <h1>Courses</h1>
        <table>
            <thead>
                <tr>
                    <td>Course Name</td>
                    <td>Description</td>
                    <td>Date Added</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course)
                { ?>
                    <tr>
                        <td><?= $course-> name; ?></td>
                        <td><?= $course-> description; ?></td>
                        <td><?= date("F j, Y, g:i a", strtotime($course-> created_at)); ?></td>
                        <td><a href="courses/destroy/<?= $course-> id ?>">Remove</a></td>
                    </tr>
             <?php   }
               ?>
             </tbody>
        </table>

    </div>

    <div id="start">
    </div>

    <div id="actitivites">

    </div>

</div> <!-- #main-container -->
</body>
</html>

