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
    <h1><?php echo $title; ?></h1>
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
    <h2><?php echo $introduction; ?></h2>
    <?php foreach($servers as $server) { 
      if($server['active'] == 1) { ?>
        <h3><?php echo $server['firstname'] . ' ' . $server['lastname'] . ' ' . $server['age']; ?></h3>
        <p><?php echo $server['description']; ?></p>
        <p>Ce serveur travaille principalement le <?php echo $server['schedule']; ?></p>
      <?php }
    } ?>
  </body>
</html>