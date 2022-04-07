<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <h1>Testo da censurare</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit hic quam ipsa aliquam non enim doloribus perspiciatis expedita minima deserunt nam quisquam aperiam nihil eveniet modi officiis atque ipsum nostrum commodi.</p>
        <h2>Risultato testo censurato</h2>
        <?php
            $_GET['word'];
            $stringa= 'Lorem ipsum dolor sit amet consectetur adipisicing elit hic quam ipsa aliquam non enim doloribus perspiciatis expedita minima deserunt nam quisquam aperiam nihil eveniet modi officiis atque ipsum nostrum commodi.';
            $stringa_esplosa = explode(' ', $stringa);
            $array_filtrato = str_replace($word, '***', $stringa_esplosa);
            $array_trasformato = implode(' ', $array_filtrato);
            echo $array_trasformato;
        ?>
    </div>
</body>
</html>

<style>
    div{
        text-align:center;
    }
</style>