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
    <h1><?php echo 'Webstart Bar'; ?></h1>
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
    <h1><?php echo $title; ?></h1>
    <?php foreach($drinks as $drink){?> 
      <p><?php echo 'Volume: ' . $drink['description'] ?></p>
      <p><?php echo 'Prix: ' . $drink['prix'] . '€' ?></p>
      <p><?php echo 'Tva: ' . $drink['vta'] . '€' ?></p>
    <?php } ?>
  </body>
</html>