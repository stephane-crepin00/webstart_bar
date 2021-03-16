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

    <?php foreach($ingredient as $drink){?> 

    <h3><?php echo $drink['title'] . ' ' . $drink['quantity'] . $drink['unit']?> </h3>
 
    <?php
    } 
    ?>
</body>
</html>