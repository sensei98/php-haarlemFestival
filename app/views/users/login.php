<?php
if (!empty($_SESSION['shopping_cart'])) {
    $total = 0;
    foreach ($_SESSION['shopping_cart'] as $key => $value) :
?>
        <!-- 
        <header>
        </header> -->
        <?php require APPROOT . '/views/includes/header.php'; ?>

        <section class="container">
            <section class="content-container">

                <section class="basket-container">
                    <article class="basket-item1">
                        <!-- <input type="hidden" name="name" value="hidden"> -->
                        <span><?php echo $value['item_name']; ?></span>
                    </article>
                    <form method="post" action="../view/cartpage.php">
                        <article>
                            <input type="hidden" value="<?php echo $value['ticketID']; ?>">
                            <input type="hidden" name="action" value="delete">
                            <button type="submit">delete</button>
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

            <section class="bottom-section">
                <article class="total-label">total</article>
                <article class="total-price">&euro;<?php echo $_SESSION['totalprice']; ?></article>
            </section>
        <?php endforeach; ?>
    <?php } else {
    echo ("<section class='emptyLabel'>Shopping cart is empty</section>");
    echo ("<section class='btn-continue-container'><a class='btn-continue' href='<?php echo URLROOT; ?>/JazzController/getJazzTickets'>Continue shopping?</a></section>"); //href to tickets page fix
}
    ?>