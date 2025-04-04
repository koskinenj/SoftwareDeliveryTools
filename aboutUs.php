<?php
  $pageTitle = "About Us";
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Yrityksemme</a>
        </div>
    </nav>
    
    <div class="container mt-5">
        <h1 class="text-center">Tietoa meistä</h1>
        <p class="text-center">Olemme omistautunut tiimi, joka pyrkii tarjoamaan parasta palvelua asiakkaillemme. Missiomme on luoda innovatiivisia ja kestäviä ratkaisuja.</p>
    </div>
    
    <footer class="bg-dark text-white text-center p-3 mt-5">
        &copy; <?php echo date("Y"); ?> Yrityksemme. Kaikki oikeudet pidätetään.
    </footer>
</body>
</html>