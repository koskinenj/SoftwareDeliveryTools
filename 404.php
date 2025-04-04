<?php
  http_response_code(404);
  $pageTitle = "Sivua ei löydy";
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
    <div class="container text-center mt-5">
        <h1>404 - Sivua ei löydy</h1>
        <p>Valitettavasti etsimääsi sivua ei löytynyt. Tarkista URL-osoite tai palaa etusivulle.</p>
        <a href="/" class="btn btn-primary">Takaisin etusivulle</a>
    </div>
</body>
</html>
