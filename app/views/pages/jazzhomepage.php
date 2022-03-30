<?php require APPROOT . '/views/includes/head.php';
?>

<!-- BACKGROUND PICTURE AND TEXT BENEATH -->
<title>Jazz Homepage</title>

<body>
    <section class="home-container">
        <section class="home-upper">
            <h1>&#8223;Jazz washes away the dust of everyday life&#8221;</h1>
        </section>
        <section class="innersection">
            <a href="<?php echo URLROOT; ?>/pages/jazztickets/" class="innersection-button"><span>Tickets</span></a>
        </section>
        <section class="content-wrapper">
            <h1>Welcome to the haarlem jazz festival</h1>
        </section>
        <section class="map-text">
            <p> Patronaat, Haarlem, Zijzingel 2 2013Dn Haarlem</p>
            <a href="https://www.google.com/maps/place/Patronaat/@52.3828953,4.6287256,15z/data=!4m5!3m4!1s0x0:0x74fe2502604b46ae!8m2!3d52.3828953!4d4.6287256"><img src="<?php echo URLROOT . '/uploads/map.png' ?>" alt="map to haarlem"></a>
        </section>
        <section class="main-content">
            <h2>Top Artists and Bands Performing</h2>
        </section>

        <?php
        foreach ($data as $row) :
            foreach ($row as $key => $value) :

        ?>
                <!-- ARTISTS & THEIR RESPECTIVE ROYALTY FREE IMAGES-->
                <section class="artists-wrapper">
                    <section class="artists-container">
                        <ul class="container__img-list">
                            <li><img src=" <?php if (!empty($value->image)) {
                                                echo URLROOT . $value->image;
                                            } ?> " alt="<?php if (!empty($value->artistname)) {
                                                            echo $value->artistname;
                                                        } ?>"></li>
                        </ul>
                        <!-- DETAILS -->
                        <section class="details">
                            <h2><?php if (!empty($value->artistname)) {
                                    echo $value->artistname;
                                } ?></h2>
                            <p><?php if (!empty($value->about)) {
                                    echo $value->about;
                                } ?></p>
                        </section>
                    </section>
                </section>
    </section>
    </section>
<?php endforeach; ?>
</section>
<?php endforeach; ?>

</body>

</html>