<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Home</a>
        </li>
        <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
            <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
            <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
        <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="btn-login">
            <a href="<?php echo URLROOT; ?>/users/logs">View Logs</a>
        </li>
        <?php endif; ?>
    </ul>
</nav>