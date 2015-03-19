<html>
<head>
  <title></title>
</head>
<body>

   <div class="post">
    <form action ="notes/update/<?= $note->id ?>" method ="post">
      <p><input type="hidden" name ="id" value="<?= $note->id ?>"></p>
      <p><input type="text" name="title" value="<?= $note->title?>"></p>
      <p><input type="text" name="description" value="<?= $note->description?>"></p>
      <p><input type="submit" value="update note">
        <a href="/notes/edit/<?=$note->id ?>">Edit</a>|<a href="/notes/destroy/<?=$note->id ?>">Delete</a>
    </div>

</body>
</html>
