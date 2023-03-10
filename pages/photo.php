<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/photos.css" rel="stylesheet">
    <link href="css/salon.css" rel="stylesheet">
    <link href="css/lightbox.min.css" rel="stylesheet" />
</head>
<body>
    
<?php include 'include/header.inc.php' ?>
<?php include 'include/nav.inc.php' ?>

    <main>
            <div class="conteneur">
                <div class="box 1"><a href="images/photos/avant-salon.webp" data-lightbox="haircoholix"><img src="images/photos/avant-salon-bis.webp"></a></div>
                <!--<div class="box 2"><a href="images/photos/after.jpg" data-lightbox="haircoholix"><img src="images/photos/after.webp"></a></div>-->
                <div class="box 3"><a href="images/photos/bac-shampoo.webp" data-lightbox="haircoholix"><img src="images/photos/bac-shampoo-bis.webp"></a></div>
                <div class="box 5"><a href="images/photos/bras-ciseaux.webp" data-lightbox="haircoholix"><img src="images/photos/bras-ciseaux-bis.webp"></a></div>
                <div class="box 6"><a href="images/photos/canape-poster.webp" data-lightbox="haircoholix"><img src="images/photos/canape-poster-bis.webp"></a></div>
                <div class="box 8"><a href="images/photos/coupe-miroir.jpg" data-lightbox="haircoholix"><img src="images/photos/coupe-miroir.webp"></a></div>
                <div class="box 9"><a href="images/photos/crane-bison.webp" data-lightbox="haircoholix"><img src="images/photos/crane-bison-bis.webp"></a></div>
                <div class="box 16"><a href="images/photos/poster.jpg" data-lightbox="haircoholix"><img src="images/photos/poster.jpg"></a></div>
                <div class="box 11"><a href="images/photos/flower.jpg" data-lightbox="haircoholix"><img src="images/photos/flower.webp"></a></div>
                <div class="box 4"><a href="images/photos/before-ext.jpg" data-lightbox="haircoholix"><img src="images/photos/before-ext.webp"></a></div>
                <div class="box 12"><a href="images/photos/lampes.webp" data-lightbox="haircoholix"><img src="images/photos/lampes-bis.webp"></a></div>
                <div class="box 13"><a href="images/photos/outside.jpg" data-lightbox="haircoholix"><img src="images/photos/outside.webp"></a></div>
                <div class="box 14"><a href="images/photos/portfolio1.PNG" data-lightbox="haircoholix"><img src="images/photos/portfolio1.webp"></a></div>
                <div class="box 15"><a href="images/photos/portfolio2.PNG" data-lightbox="haircoholix"><img src="images/photos/portfolio2.webp"></a></div> 
                <div class="box 10"><a href="images/photos/entree.webp" data-lightbox="haircoholix"><img src="images/photos/entree-bis.webp"></a></div>
                <div class="box 17"><a href="images/photos/produit1.webp" data-lightbox="haircoholix"><img src="images/photos/produit1-bis.webp"></a></div>
                <div class="box 18"><a href="images/photos/produit2.webp" data-lightbox="haircoholix"><img src="images/photos/produit2-bis.webp"></a></div>
                <div class="box 19"><a href="images/photos/sechage.webp" data-lightbox="haircoholix"><img src="images/photos/sechage-bis.webp"></a></div>
            </div>
    </main>
    
    <?php include 'include/footer.inc.php' ?>

    <?php include 'include/btt.inc.php' ?>

    <script src="js/slider.js"></script>
    <script src="js/btt.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
        lightbox.option({
        'wrapAround': true
        }) </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>