 
   
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mech Away</title>
        <link rel="stylesheet" href="layouts/css/css/bootstrap.min.css">
        <script src="layouts/css/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="layouts/img/logo1.jpg" type="image/x-icon">

        
    </head>
    <body>
        <header class="container mb-4">
                <nav class="navbar navbar-expand-sm fixed-top">
                <div class="container-fluid mt-2">
                    <a class="navbar-brand " href="index.php">
                    <img src="layouts/img/logo.png" style="width:60px;" class="rounded-pill"> 
                    Mechanical Away</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#about">Tentang Kami</a></li>
                            <li><a class="dropdown-item" href="#visi misi">Visi & Misi</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="#galeri">Gallery</a>
                        </li>  
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Customer</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#service">Service</a></li>
                            <li><a class="dropdown-item" href="#data_customer">Data Customer</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </ul>
                    </div>
                </div>
                </nav>

        </header>
        
        <main>
                  <section class="main.section">
                        <?php if (isset($_GET['hal'])) {
                              require $_GET ['hal'] . '.php';
                        } else {
                              require "main.php";
                        }
                         ?>
                  </section>
            </main>

            <footer>
                  Copyright &copy; 2024. Designed by Ananda Salsabila Khairi &#10004;
            </footer>
    </body>
    </html>