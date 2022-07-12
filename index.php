<!-- 
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:

Html, CSS, VueJS, axios, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere lato backend. 

-->

<?php 

// i will use include
include "db/db_dischi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
    
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
            <!-- create navbar -->
        <div class="container-fluid my-navbar">
            
            <div class>
                <img class="w-100" src="img/favicon-32x32.png" alt="logo spotify" />
            </div>
        
        </div>
    </header>

    <main>
        <div class="container">

        </div>
    </main>

    <footer></footer>
    
</body>
</html>