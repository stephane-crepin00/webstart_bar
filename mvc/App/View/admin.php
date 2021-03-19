<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> <?php echo $title; ?> </title>
        <link href="styles/home.css" rel="stylesheet">
        <script type="text/javascript"> </script>
        <style type="text/css"></style>
    </head>

    <body>
        <h1><?php echo $title; ?></h1>
        <h2><?php echo 'Bonjour est bienvenue sur la page Admin. Ici vous pouvez Activer ou Désactiver une carte ou un serveur.'; ?></h2>
        <h2>Cards</h2>
        <?php foreach($cards as $card) { ?>
            <div class="admin">
                <h3><?php echo $card['title']; ?></h3>
                <?php if ($card['active'] == 1) {
                    echo 'Actif';
                } else {
                    echo 'Inactif'; 
                } ?>
                <a href="/?page=admin&action=changeDataCardDisplay&id=<?php echo $card['id']; ?>">
                    <p>
                        <?php if($card['active'] == 1) {
                            echo 'Désactiver ?';
                        } else {
                            echo 'Activer ?'; 
                        }?>
                    </p>
                </a>
            </div>
        <?php } ?>
        <h2>Servers</h2>
        <?php foreach($servers as $server) { ?>
            <div class="admin">
                <h3><?php echo $server['firstname']; ?></h3>
                <?php if ($server['active'] == 1) {
                    echo 'Actif';
                } else {
                    echo 'Inactif'; 
                } ?>
                <a href="/?page=admin&action=changeDataServerDisplay&id=<?php echo $server['id']; ?>">
                    <p>
                        <?php if($server['active'] == 1) {
                            echo 'Désactiver ?';
                        } else {
                            echo 'Activer ?'; 
                        }?>
                    </p>
                </a>
            </div>
        <?php } ?>
    </body>
</html>