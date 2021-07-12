<?php 
require_once __DIR__ . "/classes/products.php";
require_once __DIR__ . "/classes/clients.php";
require_once __DIR__ . "/classes/categories.php";
require_once __DIR__ . "/classes/magazines.php";

$product1 = new Products("Occhiali","Ray-Ban",20,"ciao");
$client1 = new Clients("Antonio","Flore",29);
$category = new Categories("Accessori");
$magazines = new Magazines("Occhiali","Ray-Ban",20,"ciao");
$product1->setPriceValute(1);
$client1->setFinalPrice(20)

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <main>
            <section>
                <h1>Ciao, <?= $client1->name ?> Ecco Il tuo carello!</h1>
                <h4>Prodotto</h4>
                <h4><?= $product1->brand ?></h4>
                <h4>Prezzo</h4>
                <h4><?= $product1->price ?></h4>
                <h4>Sconto Prime</h4>
                <h4><?= $client1->discount ?></h4>
                <h4><?= $client1->finalPrice ?></h4>
                <h4><?= $category->name ?></h4>
                <h4><?= $magazines->setFullPosition("Bologna","Via dei colli,1","20189","Emilia-Romagna")?></h4>
            </section>
        </main>

    </body>
</html>
