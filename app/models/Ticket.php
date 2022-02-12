<?php
class Ticket
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }



    public function getJazzByDay($day)
    {
        $this->db->query('SELECT * from tickets where date_format(date(timefrom),"%Y-%m-%d") like :day');
        $this->db->bind(':day', $day);

        $results = $this->db->resultSet();
        return $results;
    }

    /*public function getAllEvents(){
        $this->db->query('SELECT  e.eventID, e.eventLocation, e.eventDateTime, h.hostName, e.maxCapacity, e.eventPrice
                            FROM Event as e join Host as h ON e.eventHost = h.HostID');

        $results = $this->db->resultSet();

        return $results;
    }*/

    public function getRestaurantByInfo($data)
    {
        $date = '%' . $data['date'] . '%';


        $this->db->query('SELECT * FROM Event WHERE eventLocation = :restaurant AND eventDateTime LIKE :date');
        $this->db->bind(':restaurant', $data['restaurant']);
        $this->db->bind(':date', $date);

        //        $this->db->query('SELECT * FROM Event');
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
}
