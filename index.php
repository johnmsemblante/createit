<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/596502a744.js"></script>
    <title>About Us</title>
</head>
<body>
    <?php include "template-parts/header.php"; ?>

    <main>
        <!-- Page Title -->
        <section class="page-title__container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title__h1">About Us</h1>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/img-placeholder-lg.png" alt="featured-image">
                    </div>
                    <div class="col-md-6">
                        <h2 class="page-title__h3">
                            Welcome to our company
                        </h2>
                        <div class="main__content">
                            <p>
                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate 
                                eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum 
                                felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Mauris interdum erat eget 
                                quam mattis, suscipit fermentum sem ultrices. Quisque commodo quam sit amet velit porta 
                                molestie. Morbi sodales, massa at rutrum pharetra, lectus lorem rutrum velit, quis lobortis 
                                enim lacus eu eros. Vivamus suscipit eget nunc id interdum. 
                            </p>
                            <p>
                                Ut dictum justo ut rutrum pellentesque. In vestibulum vel mi vel convallis. Integer semper 
                                consectetur erat et vestibulum. Vestibulum vulputate metus ac purus faucibus, at rhoncus enim 
                                eleifend. Vestibulum purus quam, tempus sit amet quam ac, hendrerit porttitor metus. Curabitur 
                                fermentum pellentesque adipiscing. Donec lobortis elementum orci. Donec et venenatis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "template-parts/services.php"; ?>

        <?php include "template-parts/capabilities.php"; ?>

        <?php include "template-parts/testimonials.php"; ?> 

        <?php include "template-parts/team.php"; ?>

        <?php include "template-parts/clients.php"; ?>

        <?php include "template-parts/cta.php"; ?>
    </main>

    <footer>
        <?php include "template-parts/prefooter.php"; ?>

        <?php include "template-parts/footer.php"; ?>
    </footer>

    <script src="assets/js/app.js"></script>
</body>
</html>