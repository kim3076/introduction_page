<?php
  rename('data/B.B.D/'.$_POST['old_title'], 'data/B.B.D/'.$_POST['title']);
  file_put_contents('data/B.B.D/'.$_POST['title'], $_POST['description']);
  header('Location: /test.php?id=B.B.D');
 ?>
