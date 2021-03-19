<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="styles/home.css" rel="stylesheet">
    <script type="text/javascript"></script>
    <style type="text/css"></style>
  </head>

  <body>
    <h1><?php echo "Webstart Bar"; ?></h1>
    <header>
      <a href="/">
        <h2>Home</h2>
      </a>
      <a href="/?page=card">
        <h2>Card</h2>
      </a>
      <a href="/?page=server">
        <h2>Serveur</h2>
      </a>
    </header>
    <h1><?php echo $title .' - ' .  $introduction; ?></h1> 
    <?php foreach ($cards as $card) { 
      if ($card['active'] == 1) { ?> 
        <a href="/?page=card&action=getCardById&id=<?php echo $card['id']; ?>">
          <h2> 
            <?php echo $card['title'] ?>
          </h2>
        </a>
      <?php }
    } ?>
  </body>
</html>