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
    <h1><?php echo $title; ?></h1>

    <?php foreach($drinks as $drink){?> 
      <p><?php echo 'Volume: ' . $drink['description']?></p>
      <p><?php echo 'Prix: ' . $drink['prix'] . '€'?></p>
      <p><?php echo 'Tva: ' . $drink['vta'] . '€'?></p>
    <?php } ?>
  </body>
</html>