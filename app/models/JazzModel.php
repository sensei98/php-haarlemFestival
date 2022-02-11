<?php
class JazzModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function getTopArtists()
    {
        $this->db->query('SELECT topArtists.image, tickets.artistname, tickets.about FROM topArtists JOIN tickets on topArtists.ID = tickets.Id');
        $result = $this->db->resultSet();
        return $result;
    }
    public function getJazzArtistsByID($id)
    {
        $this->db->query("SELECT * FROM tickets WHERE id = :id ");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function getAllJazzTickets()
    {
        $this->db->query('SELECT * FROM tickets ORDER BY ID');
        $result = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $result;
        } else {
            return [];
        }
    }
}
