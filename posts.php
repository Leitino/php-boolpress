<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php include 'data.php' ?>

    <?php
    $tag = $_GET['tag'];
    if (!empty($tag)) {
      $availablePost= [];
      foreach ($posts as $post) {
        if (in_array($tag, $post['tag'])) {
          $availablePost[] = $post;
        }
      }
    }
    else {
      $availablePost = $posts;
    }
     ?>
   <div class="container">
     <div class="form">
       <?php
       $tags = [];
       foreach ($posts as $post) {
         foreach ($post['tag'] as $tag) {
           if (!in_array($tag, $tags)) {
             $tags[] = $tag;
           }
         }
       }


        ?>
       <form action="http://localhost/php-boolpress/posts.php" method="get">
         <select name="tag">
           <option value="">non filtrare</option>
           <?php foreach ($tags as $tag) { ?>
             <option value="<?php echo $tag; ?>"><?php echo ucfirst($tag); ?></option>
           <?php
           } ?>

         </select>
         <input type="submit" value="cerca">

       </form>

       </select>
   </div>
    <?php foreach ($availablePost as $post) { ?>
      <?php $postDate = DateTime::createFromFormat('d/m/Y H:i:s', $post['published_at']) ?>
      <div class="posts">
        <a class="ancore" href='<?php echo "post-datails.php?"."slug"."=".$post['slug'] ?>'> <h2><?php echo ($post['title']) ?></a>
        <span class="data-post"> <?php echo $postDate ->format('d M') ?> alle
          <?php echo $postDate -> format('H m s') ?>
        </span> </h2>
        <p> <?php echo ($post['content']); ?></p>
      </div>
    </div>
    <?php
  } ?>
  </body>
</html>
