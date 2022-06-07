<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

    <?php $my_paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sapiente esse similique, cupiditate atque hic possimus sint, officiis laboriosam saepe nesciunt mollitia temporibus illo. Officia dolorem molestiae voluptates illum quaerat." ?>

    <h3>Stampa del paragrafo creato come variabile PHP</h3>
    <p>
        <?php
        echo $my_paragraph;
        ?>

    </p>

    <h3>Stampa della lunghezza della stringa</h3>
    <p>
        <?php
        echo "La lunghezza di questo paragrafo è " . strlen($my_paragraph) . " caratteri."
        ?>
    </p>

    <?php
    $user_word = $_GET["name"];
    echo "Hello " . $user_word . "!";
    ?>

    <p>
        <?php
            echo $user_word;
        ?>
    </p>
</body>

</html>