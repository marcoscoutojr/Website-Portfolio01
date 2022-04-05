<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta viewport="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title></title>
        
        <!-- Custom File CSS -->
        <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>">
    </head>
    <body>
        
        <?= $v->section("content"); ?>
        
        <!-- Custom File JS -->
        <script src="<?= theme("/assets/js/scripts.js"); ?>"></script>
    </body>
</html>