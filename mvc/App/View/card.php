<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <script type="text/javascript"></script>
  <style type="text/css">
  </style>
</head>

<body>
    <h1><?php echo $title .' - ' .  $introduction; ?></h1>
    
    <?php foreach ($drinks as $drink) { ?>
     
    <a href="/?page=drink&id=<?php echo $drink['id']; ?>">
    <h2> 
     <?php echo $drink['title'] ?>
    </h2>
    </a>
    <p> 
    <?php echo $drink['description'] ?> 
    </p> 
    <?php
    } 
    ?>
</body>
</html>