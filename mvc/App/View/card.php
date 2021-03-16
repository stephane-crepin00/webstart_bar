<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <script type="text/javascript"></script>
    <style type="text/css">
    </style>
  </head>

  <body>
    <h1><?php echo $title .' - ' .  $introduction; ?></h1>
      
    <?php foreach ($drinks as $drink) { 
      if ($drink['active'] == 1) { ?> 
        <a href="/?page=drink&id=<?php echo $drink['id']; ?>">
          <h2> 
            <?php echo $drink['title'] ?>
          </h2>
        </a>
      <?php }
    } ?>
  </body>
</html>