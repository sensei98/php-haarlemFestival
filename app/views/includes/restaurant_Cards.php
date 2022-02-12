<section class="row">
<?php foreach ($data[0] as $Key=>$values)
{ ?>
    <section class="col-sm-6" >
        <section class="card">
            <img src="img/<?php echo $values['image']?>" id="card_img">
            <section class="card-body">
                <h2 class="card-title"><?php echo $values['restaurantName'];?></h2>
                <section class="card-header">
                    <h5> Price: <?php echo $values['Price'];?></h5>
                </section>
                <section>
                    <h4> We offers </h4>
                </section>
                <?php foreach ($values['type'] as $key=> $type)
                { ?>
                <section class="<?php$type['restaurant_type'];?> details">
                    <p class="card-text"> <?php echo $type['restaurant_type'];?></p>
                </section>
                <?php } ?>
                <p class="card-text"><?php echo $values['description'];?></p>
                <a href="Pages/food_tickets/<?php echo $values['restaurantId']?>" class="btn btn-primary">Reserve Table</a>
            </section>
        </section>
    </section>
    <?php } ?>
</section>