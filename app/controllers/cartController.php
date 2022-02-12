<?php
class cartController extends Controller
{

    public function __construct()
    {
        $this->JazzModel = $this->model('JazzModel');
    }

    public function initShoppingCart($id)
    {
        if (isset($_SESSION['shopping_cart'])) {
            $item_array_ID = array_column($_SESSION['shopping_cart'], "ticketID");
            if (!in_array($id, $item_array_ID)) {
                $count = count($_SESSION['shopping_cart']);
                $data = $this->getAllTicketsToCart($id);
                $_SESSION['shopping_cart'][$count] = $data;
            } else {
                echo '<script>alert("Item has already been added")</script>';
                //redirect to jazzticket page
            }
        } else {
            $data = $this->getAllTicketsToCart($id);
            $_SESSION['shopping_cart'][0] = $data;
        }
    }


    public function getAllTicketsToCart($id)
    {
        $price = $_POST['hidden_price'];
        $name = $_POST['hidden_name'];
        $data = array("ticketID" => $id, "item_name" => $name, "item_price" => $price, "item_quantity" => $_POST['quantity']);
        return $data;
    }


    public function addTocart()
    {
        if (isset($_POST['add'])) {
            $data = $this->initShoppingCart($_POST['hidden_ID']);
        }
        $this->view('cart/cartpage', $data);
    }

    //needs fixing
    public function RemoveFromCart()
    {
        if (isset($_POST['action']) && $_POST['action'] == "delete") {
            foreach ($_SESSION['shopping_cart'] as $keys => $values) {
                if ($values["ticketID"] == $_POST['hidden_ID']) {
                    unset($_SESSION['shopping_cart'][$keys]); //$keys   
                    echo '<script>alert("Item has been deleted")</script>';
                    //redirect to cart page
                    $this->view('cart/cartpage');
                }
            }
        }
    }
}
