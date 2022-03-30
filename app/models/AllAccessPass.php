<?php
class AllAccessPass
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function getAccessPasses()
    {
        $this->db->query("SELECT * FROM all_access_pass ORDER BY ID");
        $result = $this->db->resultSet();
        if ($this->db->rowCount() > 0) {
            return $result;
        } else {
            return [];
        }
    }
}
