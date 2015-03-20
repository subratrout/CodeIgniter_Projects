<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Note in CodeIgniter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
     <script>
        $(document).ready(function(){
          $(document).on('submit', 'form', function(){
            $.post(
                $(this).attr('action'),
                $(this).serialize(),
                function(response){
                  $('#result').html(response)

                })
            return false;
          })

          $(document).on('change', 'div.notes textarea', function(){
            $(this).parent().submit();
          })

          $(document).on('click', 'div.notes .title', function(){
            $(this).replaceWith('<input type="text" name="title">');
          })

            $(document).on('change', 'div.notes input', function(){
            $(this).parent().submit();
          })
        })
    </script>
</head>
<body>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2>Welcome to Note It Wall</h2>
        <div id="result">
          <?php require_once('partials/notes.php'); ?>
        </div>
        <div id="write-note">
           <form action="/notes/create" method="post">
            Title: <input class="write" type="text" name="title" value=""><br>
            Description: <textarea class="form-control" name="description"></textarea>
          <input class ="btn btn-warning" type="submit" value="Add Note">
        </form>

        </div>

      </div>
    </div>
</body>
</html>

