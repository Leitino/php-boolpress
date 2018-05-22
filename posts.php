<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php include 'data.php' ?>
    <?php foreach ($posts as $post) { ?>
      <div class="posts">
        <a class="ancore" href='<?php echo "post-datails.php?"."slug"."=".$post['slug']; ?>'><h2> <?php echo ($post['title']); ?></a> <span class="data-post"> <?php  echo 'pubblicato il '. ($post['published_at']); ?> </span> </h2>
        <p> <?php echo ($post['content']); ?></p>
      </div>
    <?php
  } ?>
  </body>
</html>
