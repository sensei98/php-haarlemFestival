<?php
Class RestaurantTickets{
    private $db;
    public function __construct() {
     $this->db = new Database;
    }

    public function getRestaurantTickets($restaurant_Id){
        $this->db->query("SELECT * FROM restaurant where restaurant.restaurantId='$restaurant_Id'");
        $restaurant = $this->db->resultSet();
        foreach ($restaurant as &$row) {
            $row['type']= $this->getAllRestaurantType($restaurant_Id);
        }
        return $restaurant;
    }
    public function getAllRestaurantType($restaurant_Id){
        $this->db->query("SELECT restaurant_type.restaurant_type from restaurant_restaurant_type INNER JOIN restaurant_type on restaurant_type.type_id = restaurant_restaurant_type.restaurant_type_id AND restaurant_restaurant_type.restaurant_id='$restaurant_Id'");
        $result =$this->db->resultSet();
        return $result;
    }
}