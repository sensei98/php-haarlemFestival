<head>
    <?php require APPROOT . '/views/includes/head.php' ?>
</head>

<body>
    <section class="progressbar-2-container">
        <ul class="progressbar-2">
            <li class="#">
                <a href="<?php echo URLROOT; ?>/Pages/addTocart">shopping basket</a>
            </li>
            <li class="active">
                <a href="<?php echo URLROOT; ?>/Pages/contactPage">delivery</a>
            </li>
            <li class="#">
                <a href="#">payment</a>
            </li>
            <li class="#">
                <a href="#">confirmation</a>
            </li>
        </ul>
    </section>
    <section class="left-container">

        <section id="Tickets">
            <span>Tickets</span>
        </section>

        <svg class="Line_73" viewBox="0 0 823 1">
            <path id="Line_73" d="M 0 0 L 823 0">
            </path>
        </svg>
        <section class="items-container">
            <table class="customers">
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($_SESSION["shopping_cart"] as $value) : ?>
                    <tr>
                        <td><?php echo $value["item_name"]; ?></td>
                        <td><?php echo $value["item_quantity"]; ?></td>
                        <td>&euro;<?php echo $value["item_price"]; ?></td>
                    </tr>


                <?php endforeach; ?>
                <td><span>Total Price: <span class="totalprice-span">&euro;<?php echo $_SESSION["totalprice"] ?></span></span></td>
            </table>
        </section>

        <section onclick="application.goToTargetView(event)" id="Group_221">
            <section id="edit">
                <a class="edit-text" href='<?php echo URLROOT; ?>/pages/addToCart'>edit</a>
            </section>

        </section>
    </section>

    <section class="right-container">>
        <section id="Order_details">
            <span>Order details</span>
        </section>
        <section id="Enter_details_">
            <span>Enter details</span>
        </section>
        <section class="input-container">
            <form action="<?php echo URLROOT; ?>/pages/payment" method="post">
                <section class=" input-group">
                    <section class="input-box">
                        <input type="text" placeholder="First name" required class="name" name="first_name">
                        <i class="fa fa-user icon"></i>
                    </section>
                    <section class="input-box">
                        <input type="text" placeholder="Last name" required class="name" name="last_name">
                        <i class="fa fa-user icon"></i>
                    </section>
                </section>
                <section class="input-group">
                    <section class="input-box">
                        <input type="email" placeholder="Email Address" required class="name" name="email">
                        <i class="fa fa-envelope icon"></i>
                    </section>
                    <section class="input-box">
                        <input type="text" placeholder="Address" required class="name" name="address">
                        <i class="fa fa-user icon"></i>
                    </section>
                    <section class="input-box">
                        <input type="text" placeholder="Post code" required class="name" name="postcode">
                        <i class="fa fa-user icon"></i>
                    </section>
                    <section class="input-box">
                        <input type="text" placeholder="Phone number" required class="name" name="phonenumber">
                        <i class="fa fa-user icon"></i>
                    </section>
                </section>
                <section class="input-group">
                    <section class="input-box">
                        <h4>
                            Date of Birth</h4>
                        <input type="text" placeholder="DD" class="dob" name="day">
                        <input type="text" placeholder="MM" class="dob" name="month">
                        <input type="text" placeholder="YYYY" class="dob" name="year">
                    </section>

                    <section class="btn-payment-container">
                        <section class="btn-continue-payment">
                            <input class="btn-payment" type="submit" value="To payment">
                        </section>
                    </section>
                </section>
            </form>
        </section>

    </section>


</body>