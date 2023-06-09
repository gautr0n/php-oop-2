<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L’e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine,
titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
    require_once __DIR__ . '/models/products.php';
    require_once __DIR__ . '/models/typeProduct.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <title>Php Oop 2</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

  <main class="container pb-5">
    <h1 class="my-5">ZooShop</h1>

    <div class="d-flex justify-content-between">

        <div class="card p-3 box">
            <div><img class="w-100" src="<?php echo $ball->image ?>" alt=""></div>
            <h3 class="card-title"><?php echo $ball->name ?></h3>
            <div class="card-title">Prezzo: <?php echo $ball->price ?>$</div>
            <div class="card-title">Adatto a: <?php echo $ball->categories->animal ?><img class="icon" src="<?php echo $ball->categories->image?>" alt=""></div>
            <div class="card-title">Categoria: <?php echo $ball->type ?></div>
            <div class="card-title">materiale: <?php echo $ball->material ?></div>
            <div class="card-title">Descrizione: <?php echo $ball->description ?></div>
        </div>

        <div class="card p-3 box">
            <div><img class="w-100" src="<?php echo $ball->image ?>" alt=""></div>
            <h3 class="card-title"><?php echo $ball->name ?></h3>
            <div class="card-title">Prezzo: <?php echo $ball->price ?>$</div>
            <div class="card-title">Adatto a: <?php echo $ball->categories->animal ?><img class="icon" src="<?php echo $ball->categories->image?>" alt=""></div>
            <div class="card-title">Categoria: <?php echo $ball->type ?></div>
            <div class="card-title">materiale: <?php echo $ball->material ?></div>
            <div class="card-title">Descrizione: <?php echo $ball->description ?></div>
        </div>

        <div class="card p-3 box">
            <div><img class="w-100" src="<?php echo $ball->image ?>" alt=""></div>
            <h3 class="card-title"><?php echo $ball->name ?></h3>
            <div class="card-title">Prezzo: <?php echo $ball->price ?>$</div>
            <div class="card-title">Adatto a: <?php echo $ball->categories->animal ?><img class="icon" src="<?php echo $ball->categories->image?>" alt=""></div>
            <div class="card-title">Categoria: <?php echo $ball->type ?></div>
            <div class="card-title">materiale: <?php echo $ball->material ?></div>
            <div class="card-title">Descrizione: <?php echo $ball->description ?></div>
        </div>

        <div class="card p-3 box">
            <div><img class="w-100" src="<?php echo $ball->image ?>" alt=""></div>
            <h3 class="card-title"><?php echo $ball->name ?></h3>
            <div class="card-title">Prezzo: <?php echo $ball->price ?>$</div>
            <div class="card-title">Adatto a: <?php echo $ball->categories->animal ?><img class="icon" src="<?php echo $ball->categories->image?>" alt=""></div>
            <div class="card-title">Categoria: <?php echo $ball->type ?></div>
            <div class="card-title">materiale: <?php echo $ball->material ?></div>
            <div class="card-title">Descrizione: <?php echo $ball->description ?></div>
        </div>

    </div>
  </main>
</body>

</html>