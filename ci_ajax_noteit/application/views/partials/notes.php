<?php
  foreach($notes as $note)
  {  ?>
    <div class="post">
      <p><?= $note['id'] ?></p>
        <p><?= $note['title'] ?></p>
        <p><?= $note['description'] ?></p>
        <h4><?= $note['created_at'] ?></h4>
        <a href="/notes/edit/<?=$note['id'] ?>">Edit</a>|<a href="/notes/destroy/<?=$note['id'] ?>">Delete</a>
    </div>

<?php
  }  ?>
