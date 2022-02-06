<?php

class cartController extends Controller{
    
    public function __construct() {
        $this->JazzModel = $this->model('JazzModel');
        //historymodel
        //foodmodel
    }
    
    public function createShoppingCart($data){
        if(isset($_SESSION['shopping_cart'])){
            $count = count($_SESSION['shopping_cart']);
            $_SESSION['shopping_cart'][$count] = $data;
        }
        else{
            $_SESSION['shopping_cart'][0] = $data;
        }
        //$this->view('cart',$data);
    }

    public function getJazzTicket($id){
        $tickets = $this->JazzModel->getJazzArtistsByID();
        $data = [];
        foreach($tickets as $row){
            $price = $row['price'];
            $name = $row['name'];
        }
        $data = array("ticketID" => $id, "item_name" => $name, "item_price" => $price, "item_quantity" =>$_POST['quantity']);
        return $data;

        //$this->view('cart/cart',$data);

    }
    public function cart(){
        if(isset($_POST['add'])){
            $tickets = $this->getJazzTicket($_GET['id']);
            $data = $this->createShoppingCart($tickets);
        }
        $this->view('cart/cart',$data);
    }
    






    

    public function getFoodTicket($id){
        //...
    }
    public function getHistoryTicket($id){
        //...
        
    }

    public function RemoveFromCart(){ //needs to be fixed

        if(isset($_POST['action']) && $_POST['action']=="delete"){
                foreach($_SESSION['shopping_cart'] as $keys => $value)
                    {
                        // if($_POST['idItem'] == $value["idItem"])
                        // {
                            unset($_SESSION['shopping_cart'][$value]); //$keys   
                                    
                            echo "item has been deleted";  //testing
                        // }
                    }      
            
            header('location: ../view/cartpage.php');
        }
        
    }

}