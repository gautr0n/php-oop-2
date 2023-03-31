<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L’e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine,
titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
    require_once __DIR__ . '/models/products.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <title>Php Oop</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>

  <main class="container pb-5">
    <h1 class="my-5">ZooShop</h1>

    <div class="d-flex">

        <div class="card p-3">
            <h3 class="card-title"><?php echo $croccantini->name ?></h3>
            <div class="card-title">Prezzo: <?php echo $croccantini->price ?>$</div>
            <div class="card-title">Adatto a: <?php echo $croccantini->categories->animal ?><img class="w-25" src="<?php echo $croccantini->categories->image?>" alt=""></div>
            <div class="card-title">Categoria: <?php echo $croccantini->type ?></div>
            <div class="card-title">Descrizione: <?php echo $croccantini->description ?></div>
        </div>

    </div>
  </main>
</body>

</html>