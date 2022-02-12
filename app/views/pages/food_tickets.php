<?php
require APPROOT . '/views/includes/head.php';
?>
<?php
require APPROOT . '/views/includes/food_carousel.php';
?>
<form class="form-inline" action="<?php echo URLROOT; ?>/Pages/orders" onsubmit="return CheckForBlank();" method="post">
    <section class="form-group allergy-1">
        <label for="staticEmail2" class="sr-only">Do you have any allergies that you would like to mention?</label>
    </section>
    <section class="info">
        <p><strong>Note!</strong> Reservation is mandatory. A reservation fee of €10,- per person wil be charged when a reservation is made on the Haarlem Festival site. This fee will be deducted from the final check on visiting the restaurant.</p>
    </section>
    <section class="form-group allergy-2">
        <input id="allergies" type="allergies" class="form-control" name="allergies" placeholder="allergies">
    </section>


    <?php foreach ($data[0] as $Key => $values) { ?>

        <section class="jumbotron text-center">
            <section class="container">
                <h1 class="jumbotron-heading"><?php echo $values['restaurantName']; ?></< /h1>

                    <?php foreach ($values['type'] as $key => $type) {
                    ?>
                        <section class="<?php $type['restaurant_type']; ?> details">
                            <h5 class="card-text"> <?php echo $type['restaurant_type']; ?></h5>
                        </section>
                    <?php } ?>
            </section>
        </section>

        <section class="container mb-4">
            <section class="row">
                <section class="col-12">
                    <section class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Start at</th>
                                    <th scope="col">Close at</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-right">Price</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $values['timefrom']; ?></td>
                                    <td><?php echo $values['timeto']; ?></td>
                                    <td><input name="quantity" required type="number" value="quantity" min="1" max="40" /></td>
                                    <td class="text-right"><?php echo $values['Price']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </section>
                <section class="col mb-2">
                    <section class="row">
                        <section class="col-sm-12  col-md-6">
                            <a href="<?php echo URLROOT; ?>/Home">Continue shopping</a>
                        </section>
                        <section class="col-sm-12 col-md-6 text-right">
                            <button href="<?php echo URLROOT; ?>/Pages/orders" value="AddToCart" class="btn btn-lg btn-block btn-success text-uppercase" name="AddToCart">AddToCart</button>
                        </section>
                    </section>
                </section>
            </section>
        <?php } ?>
        </section>
</form>



<?php
require APPROOT . '/views/includes/footer.php';
?>