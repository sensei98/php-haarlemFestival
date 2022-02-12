<?php
class Restaurant{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function getAllRestaurant(){
        $this->db->query('SELECT * FROM restaurant');
        $restaurant = $this->db->resultSet();
        //var_dump($restaurant);
        foreach ($restaurant as &$row) {
            $row->type = $this->getAllRestaurantType($row->restaurantId);
        }
        return $restaurant;
    }

    public function getAllRestaurantType($id){
        $this->db->query("SELECT restaurant_type.restaurant_type from restaurant_restaurant_type INNER JOIN restaurant_type on restaurant_type.type_id = restaurant_restaurant_type.restaurant_type_id AND restaurant_restaurant_type.restaurant_id='$id'");
        $result =$this->db->resultSet();
        return $result;
    }
    public function getAllType(){
        $this->db->query('SELECT * FROM restaurant_type');
        $result =$this->db->resultSet();
        return $result;

    }
}