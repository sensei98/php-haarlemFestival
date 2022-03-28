
<?php
function redirect($page)
{
    header('location: ' . URLROOT . '/' . $page);
}

function redirectPayment($page, $check, $code)
{
    header('location: ' . $page, $check, $code);
}
?>