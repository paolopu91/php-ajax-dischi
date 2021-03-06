<!-- 
    in questo file andrò ad utilizzare vuejs per fare la chiamata axios e riportare a schermo i miei 10 dischi. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
    
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- axios cdn-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- vue form cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>

<body>
<div id="app">
    <header>
            <!-- create navbar -->
        <div class="container-fluid my-navbar">
            
            <div class>
                <img class="w-100" src="img/favicon-32x32.png" alt="logo spotify" />
            </div>
        
        </div>
    </header>

    <main class="main-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row row-cols-5">
                        <div class="col" v-for="card in listaDischi">
                            <div class="card">
                                <img :src="card.poster" :alt="card.author" />
                                <div class="card-body">
                                    <div class="card-title">{{ card.title }}</div>
                                    <div class="card-author">{{ card.author }}</div>
                                    <div class="card-year">{{ card.year }}</div>
                                </div>
                            </div>  
                        </div>
                        
                    </div>
                </div>
        </div>
    </main>
</div>
    <!-- <footer></footer> -->
    <script src="js/vue.js"></script>
</body>
</html>