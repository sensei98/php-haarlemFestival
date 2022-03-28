<head>
    <?php require APPROOT . '/views/includes/head.php' ?>
</head>

<body>
    <section class="progressbar-container">
        <ul class="progressbar">
            <li class="#">
                <a href="<?php echo URLROOT; ?>/Pages/addTocart">shopping basket</a>
            </li>
            <li class="active">
                <a href="#">delivery</a>
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
        <svg class="Rectangle_178">
            <rect id="Rectangle_178" rx="28" ry="28" x="0" y="0" width="883" height="429">
            </rect>
        </svg>
        <section id="Tickets">
            <span>Tickets</span>
        </section>
        <svg class="Line_73" viewBox="0 0 823 1">
            <path id="Line_73" d="M 0 0 L 823 0">
            </path>
        </svg>
        <svg class="Line_74" viewBox="0 0 823 1">
            <path id="Line_74" d="M 0 0 L 823 0">
            </path>
        </svg>
        <svg class="Line_75" viewBox="0 0 823 1">
            <path id="Line_75" d="M 0 0 L 823 0">
            </path>
        </svg>
        <svg class="Line_76" viewBox="0 0 823 1">
            <path id="Line_76" d="M 0 0 L 823 0">
            </path>
        </svg>
        <?php foreach ($_SESSION["shopping_cart"] as $value) : ?>
            <section id="Gare_Du_Nord_x_2">
                <span><?php echo $value["item_name"] ?> x <?php echo $value["item_quantity"] ?></span>
            </section>
            <section id="_30">
                <span>&euro;<?php echo $value["item_price"] ?></span>
            </section>
        <?php endforeach; ?>
        <section id="Total_amount">
            <span>Total amount</span>
        </section>
        <section id="_55">
            <span>&euro;<?php echo $_SESSION["totalprice"] ?></span>
        </section>
        <section onclick="application.goToTargetView(event)" id="Group_221">
            <section id="edit">
                <span>edit</span>
            </section>
            <svg class="Line_77" viewBox="0 0 40 1">
                <path id="Line_77" d="M 0 0 L 40 0">
                </path>
            </svg>
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
                    <section class="input-box">
                        <h4>
                            Gender</h4>
                        <input type="radio" id="b1" name="gender" checked class="radio">
                        <label for="b1">Male</label>
                        <input type="radio" id="b2" name="gender" class="radio">
                        <label for="b2">Female</label>
                    </section>
                    <section class="btn-payment-container">
                        <section class="btn-continue-payment">
                            <input class="btn-payment" type="submit" value="Confirm your order" name="confirm">
                        </section>
                    </section>
                </section>

                <button class='btn-order' href='<?php echo URLROOT; ?>/pages/generatePDF'>generate PDF</button>
            </form>
        </section>


    </section>








</body>