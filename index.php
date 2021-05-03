<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>prova PHP</title>
  </head>
  <body>



    <!-- Creare una variabile con un paragrafo di
    testo.
    Visualizzare a schermo il paragrafo con la
    relative lunghezza e sostituire la
    badword passata in GET con tre *. -->

    <h1>Hello PHP</h1>



    <?php

    // phpinfo();

    $frase = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>';

    $replace = $_GET['badword'];

    $modificata = str_replace($replace, '***', $frase);

    echo $frase;

    echo strlen($frase);

    echo $modificata;



    ?>



  </body>
</html>
