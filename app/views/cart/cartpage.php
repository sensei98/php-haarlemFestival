<header>
    <?php require APPROOT . '/views/includes/header.php'; ?>
</header>


<section class="progressbar-container">
    <ul class="progressbar">
        <li class="active">
            <a href="<?php echo URLROOT; ?>cartController/addTocart">shopping basket</a>
        </li>
        <li class="#">
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
<section class="content-heading">
    <h2>shopping basket</h2>
</section>
<?php

if (!empty($_SESSION['shopping_cart'])) {
    $total = 0;


    foreach ($_SESSION['shopping_cart'] as $value) :
        // var_dump($_SESSION['shopping_cart']);
?>
        <section class="container">
            <section class="content-container">

                <section class="basket-container">
                    <article class="basket-item1">
                        <!-- <input type="hidden" name="name" value="hidden"> -->
                        <span><?php echo $value['item_name']; ?></span>
                    </article>
                    <form method="post" action="<?php echo URLROOT; ?>cartController/RemoveFromCart/<?php echo $value['ticketID'] ?>">
                        <article>
                            <input type="hidden" value="<?php echo $value['ticketID']; ?>">
                            <!-- <input type="hidden" name="action" value="delete"> -->
                            <button name="delete" type="submit">delete</button>
                            <!-- <button type="submit" onclick="location.href='<?php echo URLROOT; ?>/cart/cartpage?=<?php echo $value['ticketID'] ?>'">delete</button> -->
                            <!-- <a href="../view/cartpage.php?id=<?php //echo $value['ticketID']; 
                                                                    ?>"> 
                        <img class="delete-icon"src="../../jazz/icons/delete.png" alt="delete button">
                    </a> -->
                        </article>
                    </form>

                    <article class="quantity-float">Qty&colon; <?php echo $value['item_quantity'] ?></article>

                    <article class="item-price">&euro;<?php echo $value['item_quantity'] * $value['item_price']; ?></article>
                </section>
            </section>
            <?php
            $total = $total + ($value['item_quantity'] * $value['item_price']);
            $_SESSION['totalprice'] = $total;
            ?>
        <?php endforeach; ?>
        <section class="bottom-section">
            <article class="total-label">total</article>
            <article class="total-price">&euro;<?php echo $_SESSION['totalprice']; ?></article>
        </section>


    <?php } else { ?>
        <section class='emptyLabel'>Shopping cart is empty</section>
        <section class='btn-continue-container'><a class='btn-continue' href='<?php echo URLROOT; ?>jazz/jazztickets'>Continue shopping?</a></section>
    <?php }
    ?>