<head>
    <?php require APPROOT . '/views/includes/head.php' ?>
</head>

<body>
    <!-- <div id="Group_223">
        <svg class="Path_47" viewBox="0 0 21 18">
            <path id="Path_47" d="M 10.5 0 C 16.29899024963379 0 21 4.02943754196167 21 9 C 21 13.97056198120117 16.29899024963379 18 10.5 18 C 4.701010227203369 18 0 13.97056198120117 0 9 C 0 4.02943754196167 4.701010227203369 0 10.5 0 Z">
            </path>
        </svg>
        <svg class="Ellipse_11">
            <ellipse id="Ellipse_11" rx="10.5" ry="9" cx="10.5" cy="9">
            </ellipse>
        </svg>
        <svg class="Ellipse_8">
            <ellipse id="Ellipse_8" rx="10.5" ry="9" cx="10.5" cy="9">
            </ellipse>
        </svg>
        <svg class="Path_43" viewBox="0 0 21 18">
            <path id="Path_43" d="M 10.5 0 C 16.29899024963379 0 21 4.02943754196167 21 9 C 21 13.97056198120117 16.29899024963379 18 10.5 18 C 4.701010227203369 18 0 13.97056198120117 0 9 C 0 4.02943754196167 4.701010227203369 0 10.5 0 Z">
            </path>
        </svg>
        <svg class="Line_57" viewBox="0 0 427 1">
            <path id="Line_57" d="M 0 0 L 427 0">
            </path>
        </svg>
        <svg class="Line_78" viewBox="0 0 427 1">
            <path id="Line_78" d="M 0 0 L 427 0">
            </path>
        </svg>
        <svg class="Line_79" viewBox="0 0 427 1">
            <path id="Line_79" d="M 0 0 L 427 0">
            </path>
        </svg>
        <div id="Shopping_Basket">
            <span>Shopping Basket</span>
        </div>
        <div id="Delivery_">
            <span>Delivery </span>
        </div>
        <div id="Confirmation">
            <span>Confirmation</span>
        </div>
        <div id="Payment">
            <span>Payment</span>
        </div>
    </div> -->
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
                <a href="#"> >confirmation</a>
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
                            <input class="btn-payment" type="submit" value="Confirm">
                        </section>
                    </section>
                </section>

                <button class='btn-order' href='<?php echo URLROOT; ?>/pages/generatePDF'>generate PDF</button>
            </form>
        </section>

    </section>

</body>