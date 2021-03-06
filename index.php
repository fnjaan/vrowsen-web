<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--RESOURCES-->
    <link rel="stylesheet" href="_resources/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="_resources/fontawesome/5.12.1/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="_assets/css/main.css">

    <!--TITLE-->
    <title>VROWSEN</title>
</head>
<body class="bg-light">

    <!--HEADER-->
    <header>

        <!--NAVBAR-->
        <?php include_once 'includes/navbar.inc.php'?>

        <!--SEARCH PANEL-->
        <div class="ct-color-lightgray mb-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href=""><img src="_assets/imgs/vrowsen-icon.png" alt="vrowsen-icon" height="90" weight="90" srcset=""></a>
                    </div>
                    <div class="col-sm-8">
                        <form method="get" action="index.php">
                            <div class="input-group  input-group-lg mt-3">  
                                <input type="text" class="form-control" placeholder="Search..." name="search" value="">
                                <button class="input-group-append btn btn-secondary px-5">Search</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </header>
    
    <!--MAIN-->
    <main>
        <!--MOST RATED VENUES-->
        <div class="container mb-4">
            <div class="row">
                <div class="col">
                    <h2 class="ct-color-darkbrown"><strong>Most Rated</strong></h2>
                </div>

                <!--BUTTONS LEFT AND RIGHT MOST RATED PAGINATION.-->
                <div class="col" id="page">
                    <!--Generated by using javascript venue.js-->
                </div>

            </div>
            <hr>
            <div class="card">
                <!--LIST OF MOST RATED -->
                <div class="card-body" id="data"> 
                    <!--Generated by using javascript venue.js-->
                </div>
            </div>
        </div>

        <!--VENUE LIST-->
        <div class="bg-dark ">
           <div class="container">
                <h2 class="ct-color-lightbrown venue-header mb-4"><strong>Venues</strong></h2>
           </div>
        </div>
        <div class="container mb-5">
            <hr>
            <div class="card">
                <div class="card-body" id="data"> 
                </div>
            </div>
        </div>
    </main>

    <!--FOOTER-->
    <footer class="footer bg-dark ct-color-lightbrown">
        <div class="container">
            <div class="row p-2">
                <div class="col">
                    <p class="text-center mt-4 pl-3 pb-0"> © 2020 Venue Reservation Online Website </p>
                </div>
            </div>
        </div>
    </footer>
   
    <!--SCRIPTS-->
    <script src="_resources/jquery/3.4.1/jquery-3.4.1.min.js"></script>
    <script src="_resources/handlebars/4.7.6/handlebars.min.js"></script>
    <script src="_resources/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="_resources/pagination/2.1.5/pagination.min.js"></script>
    <script src="_assets/js/most-rated.js"></script>
</body>
</html>
