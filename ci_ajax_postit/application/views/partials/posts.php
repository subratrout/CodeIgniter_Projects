<?php
  foreach($posts as $post)
  {  ?>
    <div class="post">
        <p><?= $post['description'] ?></p>
        <h4><?= $post['created_at'] ?></h4>
    </div>
<?php
  }  ?>
