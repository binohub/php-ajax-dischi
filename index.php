<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Axios CDN minified version 0.21.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CSS bootstraponly -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>



    <title>php dischi</title>
</head>

<body>
    <div id="app">
        <header class="d-flex align-items-center">
            <div class="container">
                <nav class="navbar navbar-light">
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="https://www.animefactory.it/wp-content/themes/animefactory/assets/images/logo-w.png" width="150" height="50" alt="">
                        </a>
                    </div>
                    <div>
                        <nav class="navbar">
                            <form class="form-inline d-flex">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>
                    </div>
                </nav>
            </div>
        </header>

    



        <div class="cards">
            <div class="container">
                <div class="row">

                    <div class="col-3 py-2"
                    v-for="(element, index) in dischiElement">

                        <div class="myCard d-flex flex-column align-items-center">
                            <img class="img-fluid" :src="element.image" alt="card logo">
                            <h1 class="titleCard">{{element.title}}</h1>
                            <span class="AuthorCard">{{element.author}}</span>
                            <span class="yearCard">{{element.year}}</span>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- JS  va messo in fondo -->
    <script src="./script/script.js"></script>

</body>

</html>