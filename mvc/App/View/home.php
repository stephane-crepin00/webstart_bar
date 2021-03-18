<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo $title; ?> </title>
        <script type="text/javascript">
        </script>
        <style type="text/css">
        </style>
    </head>

    <body>
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $introduction; ?></h2>
        <h3>Cards</h3>
        <?php foreach($cards as $card) { 
            if ($card['active'] == 1) {?>
                <a href="/?page=card&id=<?php echo $card['id']; ?>">
                    <h3><?php echo $card['title']; ?></h3>
                </a>
                <p><?php echo $card['description']; ?></p>
            <?php }
        } ?>
        <h3>Serveur</h3>
        <?php foreach($servers as $server) { 
            if ($server['active'] == 1) { ?>
                <a href="/?page=server&id=<?php echo $server['id']; ?>">
                    <h3><?php echo $server['firstname']?></h3>
                </a>
                <p><?php echo 'Ce serveur travail le ' . $server['schedule']; ?></p>
            <?php }
        } ?>
    </body>
</html>