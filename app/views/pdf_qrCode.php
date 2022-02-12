<?php
require APPROOT . '/views/includes/head.php';
?>
<?php
require APPROOT . '/views/includes/food_carousel.php';
?>


    <form method="post">
        <section class="form-row">
            <section class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </section>
        </section>
        <section class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </section>
        <section class="form-row">
            <section class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
            </section>
            <section class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip">
            </section>
        </section>
        <button type="submit" name="Generate" class="btn btn-primary"value="Generate">Generate</button>
    </form>
<?php
require APPROOT . '/views/includes/footer.php';
?>