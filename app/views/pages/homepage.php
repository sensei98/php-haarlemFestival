<?php
include APPROOT . '/views/includes/head.php';
?>
<?php

if (!isset($_SESSION)) {
    session_start();
}

?>
<article id="Web_1920__3">

    <section id="sharing">
        <div id="Sharing_of_the_customers_last_">
            <span>Recap of last year</span>
        </div>
        <img id="Image_20" src="<?php echo URLROOT; ?>/public/img/Image_20.png" srcset="<?php echo URLROOT; ?>/public/img/Image_20.png 1x, <?php echo URLROOT; ?>/public/img/Image_20@2x.png 2x">

        <img id="Image_21" src="<?php echo URLROOT; ?>/public/uploads/example.jpg" srcset="<?php echo URLROOT; ?>/public/uploads/example.jpg 1x, <?php echo URLROOT; ?>/public/uploads/example.jpg 2x">

        <img id="Image_22" src="<?php echo URLROOT; ?>/public/uploads/oj.jpg" srcset="<?php echo URLROOT; ?>/public/uploads/oj.jpg 1x, <?php echo URLROOT; ?>/public/uploads/oj.jpg 2x">

    </section>
    <section id="socialDistance">
        <img id="Image_5" src="<?php echo URLROOT; ?>/public/img/Image_5.png" srcset="<?php echo URLROOT; ?>/public/img/Image_5.png 1x, <?php echo URLROOT; ?>/public/img/Image_5@2x.png 2x">

        <svg class="Path_39" viewBox="0 0 1920 798">
            <path id="Path_39" d="M 0 4 L 1920 0 L 1920 798 L 0 798 L 0 4 Z">
            </path>
        </svg>
        <section id="Social_Distancing">
            <span>Social Distancing?</span>
        </section>
        <section id="Dont_Worry">
            <span>Don't Worry!</span>
        </section>
        <section id="You_can_enjoy_The_Haarlem_Fest">
            <span>You can enjoy The Haarlem Festival from home</span>
        </section>
        <a id="Button_GO1">
            <svg class="Rectangle_95">
                <rect id="Rectangle_95" rx="0" ry="0" x="0" y="0" width="748" height="101">
                </rect>
            </svg>
        </a>
        <section id="View_our_online_events">
            <span>View our online events</span>
        </section>
    </section>
    <section id="volunteer">
        <section id="Interested_in_Volunteering">
            <span>Interested in Volunteering?</span>
        </section>
        <svg class="Rectangle_111_bo">
            <linearGradient id="Rectangle_111_bo" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
            </linearGradient>
            <rect id="Rectangle_111_bo" rx="3" ry="3" x="0" y="0" width="463" height="6">
            </rect>
        </svg>
        <svg class="Rectangle_112_bq">
            <linearGradient id="Rectangle_112_bq" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
            </linearGradient>
            <rect id="Rectangle_112_bq" rx="3" ry="3" x="0" y="0" width="463" height="6">
            </rect>
        </svg>
        <svg class="Rectangle_113_bs">
            <linearGradient id="Rectangle_113_bs" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
            </linearGradient>
            <rect id="Rectangle_113_bs" rx="3" ry="3" x="0" y="0" width="463" height="6">
            </rect>
        </svg>
        <a id="Button_GO_bt">
            <svg class="Rectangle_95_bu">
                <rect id="Rectangle_95_bu" rx="0" ry="0" x="0" y="0" width="554" height="75">
                </rect>
            </svg>
            <section id="Email_Us">
                <span>Email Us</span>
            </section>
        </a>
    </section>
    <section id="createProgramme">
        <img id="Image_4" src="<?php echo URLROOT; ?>/public/img/Image_4.png" srcset="<?php echo URLROOT; ?>/public/img/Image_4.png 1x, <?php echo URLROOT; ?>/public/img/Image_4@2x.png 2x">

        <svg class="Rectangle_109">
            <rect id="Rectangle_109" rx="0" ry="0" x="0" y="0" width="1920" height="798">
            </rect>
        </svg>
        <section id="Group_1">
            <section id="Busy_Week">
                <span>Busy Week?</span>
            </section>
            <section id="Weve_go_you_covered">
                <span>We've got you covered!</span>
            </section>
            <section id="Optimize_your_time_with_a_pers">
                <span>Optimize your time with a personalized programme</span>
            </section>
            <a id="Button_GO_b">
                <svg class="Rectangle_95_b">
                    <rect id="Rectangle_95_b" rx="0" ry="0" x="0" y="0" width="748" height="101">
                    </rect>
                </svg>
                <section id="Create_a_Programme">
                    <span>Create a Programme</span>
                </section>
            </a>
        </section>

    </section>
    <!-- ALL ACCESS PASS TICKET SECTION-->
    <section id="register">
        <section class="register-heading">
            <h1>All access passes</h1>
        </section>
        <?php
        foreach ($data as $row) :
            for ($i = 0; $i < count($row); $i++) :
        ?>
                <form method="post" action="<?php echo URLROOT; ?>/Pages/addTocart/<?php echo $row[$i]->ID ?>">
                    <section class="accesspass-containers">
                        <span class="accesspass-tickets"><?php echo $row[$i]->Name; ?> (&euro;<?php echo $row[$i]->Price ?>)</span>
                        <section class="tickets-buttons">
                            <input type="hidden" name="hidden_name" value="<?php echo $row[$i]->Name; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row[$i]->Price ?>" />
                            <input type="hidden" name="hidden_ID" value="<?php echo $row[$i]->ID ?>" />
                            <input type="hidden" name="hidden_location" value="<?php echo $row[$i]->Location ?>" />
                            <input class="button1" name="add" type="submit" value="Add to cart" onclick="location.href='<?php echo URLROOT; ?>/pages/cartpage?=<?php echo $row[$i]->ID ?>'">
                            <input class="inputfield" type="text" name="quantity" value=1>
                        </section>
                    </section>

                </form>
            <?php endfor; ?>
        <?php endforeach; ?>

    </section>
    <!-- ALL ACCESS PASS TICKET SECTION-->

    <section id="midDance">
        <img id="Image_1" src="<?php echo URLROOT; ?>/public/img/brinkman.jpg" srcset="<?php echo URLROOT; ?>/public/img/brinkman.jpg 1x, <?php echo URLROOT; ?>/public/img/brinkman.jpg 2x">

        <svg class="recDance">
            <rect id="recDance" rx="0" ry="0" x="0" y="0" width="640" height="302">
            </rect>
        </svg>
        <section id="Time_to_get_wild_with_the_musi">
            <span>Visit haarlem and check out the historic sites and places in Haarlem with your family!</span><br>
        </section>
        <a id="dance_Button">
            <svg class="Rectangle_95_cm">
                <rect id="Rectangle_95_cm" rx="0" ry="0" x="0" y="0" width="216" height="45">
                </rect>
            </svg>
            <div id="GET_MORE_INFO">
                <span>GET MORE INFO</span>
            </div>
        </a>
        <section id="danceColorBar">
            <svg class="Rectangle_91_cq">
                <linearGradient id="Rectangle_91_cq" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_91_cq" rx="3" ry="3" x="0" y="0" width="537" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_93_cs">
                <linearGradient id="Rectangle_93_cs" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_93_cs" rx="3" ry="3" x="0" y="0" width="537" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_98">
                <rect id="Rectangle_98" rx="3" ry="3" x="0" y="0" width="537" height="6">
                </rect>
            </svg>
        </section>
    </section>
    <section id="midJazz">
        <img id="Image_2" src="<?php echo URLROOT; ?>/public/uploads/tickets-background2.jpg" srcset="<?php echo URLROOT; ?>/public/uploads/tickets-background2.jpg 1x, <?php echo URLROOT; ?>/public/uploads/tickets-background2.jpg 2x">

        <svg class="recJazz">
            <rect id="recJazz" rx="0" ry="0" x="0" y="0" width="640" height="302">
            </rect>
        </svg>
        <section id="Jazz_is_back_in_Haarlem_Come_a">
            <span>Jazz is back in Haarlem! Come and enjoy this unique experience and listen to the fantastic bands and artists that Haarlem has to offer.</span>
        </section>
        <section id="jazzColorBar">
            <svg class="Rectangle_91_c">
                <linearGradient id="Rectangle_91_c" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_91_c" rx="3" ry="3" x="0" y="0" width="536" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_93_da">
                <linearGradient id="Rectangle_93_da" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_93_da" rx="3" ry="3" x="0" y="0" width="536" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_97">
                <rect id="Rectangle_97" rx="3" ry="3" x="0" y="0" width="536" height="6">
                </rect>
            </svg>
        </section>
        <a id="Jazz_Button" href="<?php echo URLROOT ?>/pages/jazzhomepage">
            <svg class="Rectangle_95_c">
                <rect id="Rectangle_95_c" rx="0" ry="0" x="0" y="0" width="216" height="45">
                </rect>
            </svg>
            <section id="GET_MORE_INFO_c">
                <span>GET MORE INFO</span>
            </section>
        </a>
    </section>
    <section id="midFood">
        <img id="Image_3" src="<?php echo URLROOT; ?>/public/img/Image_3.png" srcset="<?php echo URLROOT; ?>/public/img/Image_3.png 1x, <?php echo URLROOT; ?>/public/img/Image_3@2x.png 2x">

        <svg class="recFood">
            <rect id="recFood" rx="0" ry="0" x="0" y="0" width="640" height="302">
            </rect>
        </svg>
        <a id="Food_Button" href="<?php echo URLROOT; ?>/#">
            <svg class="Rectangle_95_db">
                <rect id="Rectangle_95_db" rx="0" ry="0" x="0" y="0" width="217" height="45">
                </rect>
            </svg>
            <section id="GET_MORE_INFO_dc">
                <span>GET MORE INFO</span>
            </section>
        </a>
        <section id="Time_to_get_wild_with_the_musi_dd">
            <span>Know more about Haarlem with your family! Check out the restaurants and food stops of Haarlem!</span><br>
        </section>
        <section id="foodColorBar">
            <svg class="Rectangle_91_dg">
                <linearGradient id="Rectangle_91_dg" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_91_dg" rx="3" ry="3" x="0" y="0" width="537" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_93_di">
                <linearGradient id="Rectangle_93_di" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_93_di" rx="3" ry="3" x="0" y="0" width="537" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_99">
                <rect id="Rectangle_99" rx="3" ry="3" x="0" y="0" width="537" height="6">
                </rect>
            </svg>
        </section>
    </section>
    <section id="Header">
        <section id="Headline_Text">
            <section id="Anniversary_of_The_Historic_Ci">
                <span>With Family And Friends</span><br>
            </section>
            <section id="Group_9">
                <section id="ID190th_">
                    <span></span>
                </section>
                <section id="Come_Celebrate_The">
                    <span>Celebrate The Haarlem Festival</span>
                </section>
            </section>
            <svg class="Rectangle_100_dr">
                <linearGradient id="Rectangle_100_dr" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_100_dr" rx="3" ry="3" x="0" y="0" width="463" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_101_dt">
                <linearGradient id="Rectangle_101_dt" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_101_dt" rx="3" ry="3" x="0" y="0" width="463" height="6">
                </rect>
            </svg>
            <svg class="Rectangle_110_dv">
                <linearGradient id="Rectangle_110_dv" spreadMethod="pad" x1="0" x2="0.963" y1="1" y2="0.171">
                    <stop offset="0" stop-color="#ff518b" stop-opacity="1"></stop>
                    <stop offset="1" stop-color="#fcc75f" stop-opacity="1"></stop>
                </linearGradient>
                <rect id="Rectangle_110_dv" rx="3" ry="3" x="0" y="0" width="463" height="6">
                </rect>
            </svg>
        </section>
        <img id="HaarlemCity" src="<?php echo URLROOT; ?>/public/uploads/example.jpg" srcset="<?php echo URLROOT; ?>/public/uploads/example.jpg 1x, <?php echo URLROOT; ?>/public/uploads/example.jpg 2x">

        <svg class="Path_40" viewBox="0 0 1920 917">
            <path id="Path_40" d="M 0 0 L 1920 0 L 1920 917 L 0 917 L 0 0 Z">
            </path>
        </svg>
        <section id="Experience_Haarlem">
            <span>The Haarlem Festival</span>
        </section>
    </section>

    <?php //include APPROOT . '/views/inc/navbar.php'; 
    ?>
    <?php //require APPROOT . '/views/inc/dynamic.php'; 
    ?>

</article>

<?php require APPROOT . '/views/includes/footer.php';
?>