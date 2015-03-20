<?php
  foreach($notes as $note)
  {  ?>
    <div class="notes">
        <form action="/notes/update" method="post">
           <span> Title:</span> <h6 class="title"><?= $note['title'] ?></h6>
           Description: <textarea class="form-control" name="description"><?= $note['description'] ?></textarea>
          <input type="hidden" name ="id" value="<?= $note['id'] ?>">
          <input class="btn btn-success" type="submit" value="Update">
        </form>
        <form action="/notes/delete" method="post">
           <input type="hidden" name ="id" value="<?= $note['id'] ?>">
           <input class="btn btn-danger" type="submit" value="Delete">
        </form>

    </div>

<?php
  }  ?>
