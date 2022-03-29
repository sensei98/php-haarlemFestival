<!-- <header>
    <? //php // require APPROOT . '/views/includes/head.php'; 
    ?>
</header> -->

<body>
    <p>Thanks for shopping with us</p>
    <?php if (isset($_POST["submit"]) == "Confirm") {
        var_dump($_POST["email"]);
    } ?>

</body>