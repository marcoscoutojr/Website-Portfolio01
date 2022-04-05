<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta viewport="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <?= $head; ?>
        
        <!-- CDN Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Custom File CSS -->
        <link rel="stylesheet" href="<?= theme("/assets/css/style.css"); ?>">
    </head>
    <body>
        
        <!--Custom Cursor-->
        <div class="cursor-1"></div>
        <div class="cursor-2"></div>
        
        <div id="menu-bars" class="fa fa-bars"></div>
        
        <!--HEADER-->
        <header>
            <a href="#" class="logo"><span>Marcos</span> Couto Jr </a>
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#service">services</a>
                <a href="#experience">experiences</a>
                <a href="#portfolio">protfolio</a>
                <a href="#contact">contact</a>
            </nav>
            <div class="follow">
                <div class="fab fa-facebook-f"></div>
                <div class="fab fa-instagram"></div>
                <div class="fab fa-linkedin"></div>
            </div><!--/follow-->
        </header><!--/HEADER-->
        
        <?= $v->section("content"); ?>
        
        <!-- Custom File JS -->
        <script src="<?= theme("/assets/js/scripts.js"); ?>"></script>
    </body>
</html>