<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <?php include 'data.php' ?>
    <?php include 'data-comments.php' ?>

    <?php
    $slug = $_GET['slug'];
    foreach ($posts as $post) {
      if ($slug == $post['slug']) { ?>
        <div class="postContainer">
          <p><?php echo 'pubblicato il '. ($post['published_at']); ?></p>
          <h1><?php echo($post['title']); ?></h1>
          <div class="postContainer_img float-left">
            <img src="<?php echo ($post['image']); ?>" alt="">
          </div>
          <div class="postContainer_content float-left">
            <?php echo ($post['content']); ?>
            <h5><?php echo json_encode($post['tag']); ?></h5>
          </div>
        </div>
      <?php
      }
    } ?>
  </body>
</html>
