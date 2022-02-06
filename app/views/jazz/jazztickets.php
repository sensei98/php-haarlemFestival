<?php

if (!isset($_SESSION)) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <?php require APPROOT . '/views/includes/header.php' ?>
</head>

<body>

    <section class="tickets-overallwrapper">
        <section class="ticketpage-header">
            <h1>Tickets</h1>
        </section>
        <?php

        var_dump($data1)
        ?>
        <section class="tickets-body">
            <section class="tickets-heading">
                <h2><?php if (!empty($row->location)) {
                        $row->location;
                    } ?></h2>
                <!--FILTER OR NO FILTER?? -->
                <!-- <a type=button class="button-filter">filter dates</a>   -->
            </section>

            <ul class="u-list-item">
                <li class="list-item">
                    <section class="tickets-container">
                        <section class="tickets">
                            <span class="date-start">
                                <?php

                                // CONVERTING DATETIME TO RESPECTIVE month,day,year
                                $month = $row->timefrom;
                                $day = $row->timefrom;
                                $year = $row->timefrom;

                                $m = date("M", strtotime($month));
                                $d = date("d", strtotime($day));
                                $y = date("Y", strtotime($year));
                                ?>
                                <section class="date-month"><?php echo $m; ?></section>
                                <section class="date-date"><?php echo $d; ?></section>
                                <section class="date-year"><?php echo $y; ?></section>
                            </span>

                            <!-- should point to the shopping cart -->
                            <form method="POST" action="<?php echo URLROOT; ?>/cartController/cart/<?php echo $row->ID ?>">
                                <section class="flex-column">
                                    <span name="" class="artist-name"><?php echo $row->artistname; ?></span>
                                    <?php
                                    // CONVERTING DATETIME TO 24hour times
                                    $timefrom = $row->timefrom;
                                    $tFrm = date("G", strtotime($timefrom));

                                    $timeto = $row->timeto;
                                    $tto = date("G", strtotime($timeto))
                                    ?>

                                    <span class="artist-time"><?php echo $tFrm; ?>:00 &ndash; <?php echo $tto; ?>:00</span>
                                    <span class="artist-location"><?php echo $row->hall; ?></span>
                                    <span class="price">&euro;<?php echo $row->price; ?></span>
                                    <span class="artist-about"><?php echo $row->about; ?></span>

                                </section>

                                <section class="tickets-buttons">

                                    <!-- <input class="button1" name = "add" type="submit" value ="Add to cart" 
                                                     onclick="location.href='<?php //echo URLROOT; 
                                                                                ?>/cartController/cart?=<?php // echo $row->ID 
                                                                                                        ?>'">  -->
                                    <!-- <button id="cartPage" name="action" type="submit" value="cartPage">cart test</button> -->
                                    <label>Quantity&colon;</label>
                                    <input class="inputfield" type="text" name="quantity" value=1>

                                </section>
                            </form>

                            <section id="1-popup" class="overlay">
                                <section class="popup">
                                    <h4><?php echo $row->artistname; ?></h4>
                                    <a class="close" href="#">&times;</a>
                                    <section class="popup-content">

                                        <!-- <?php
                                                if ($row['artistname']) {
                                                    var_dump($row['about']); //commented
                                                } ?> -->

                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                </li>
            </ul>
        </section>
        <script src="../js/button-animation.js"></script>

        <?php //endforeach; 
        ?>
        <?php //endforeach;
        ?>

</body>

</html>