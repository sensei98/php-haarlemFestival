<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/jazz.css' ?>">
    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/cart.css' ?>">

    <title>Haarlem Festival</title>
</head>

<body>
    <section class="container">
        <header>
            <nav>
                <section class="nav-bg"></section>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#"><img src="<?php echo URLROOT . 'public/img/icons/logo.png' ?>" alt="logo" class="icon"></a>
                    </li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>#">Home</a></a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>jazz/jazzhomepage">Jazz</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>#">Food</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>#">History</a></li>
                    <li class="nav-item"><a href="<?php echo URLROOT; ?>#">CMS</a></li>
                    <li class="nav-item"><a href="#"><img src="<?php echo URLROOT . 'public/img/icons/profile.png' ?>" alt="profile-icon" class="icon__profile"></a></li>
                    <section class="dropdown">
                        <li class="nav-item"><a><img src="<?php echo URLROOT . 'public/img/icons/shopping-basket.png' ?>" alt="cart-icon" class="icon__cart"></a></li>
                        <section class="dropdown-content">
                            <!-- fix this -->
                            <a href="<?php echo URLROOT; ?>cartController/addTocart" class="dropdown-button">View cart</a>
                        </section>
                    </section>
                    <!-- <script src="../js/cart-animation.js"></script>  -->

                </ul>
            </nav>
        </header>
    </section>
</body>

</html>