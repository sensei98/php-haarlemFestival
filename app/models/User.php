<?php
class User {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (username, email, creation_time, password_hash, privilege_level) VALUES(:username, :email, now(), :password, 0)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            $this->dbLog($data['username'], "3", "User registers own account");
            return true;
        } else {
            return false;
        }
    }


    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Find user id by username. Email is passed in by the Controller.
    public function findUserIdByUsername($username) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Email param will be bound with the username variable
        $this->db->bind(':username', $username);
        
        $row = $this->db->single();
        if(isset($row->user_id)){
            return $row->user_id;
        }
        else{
            return null;
        }
    }

    public function getLogs($user_id, $privilege_level){
        $this->db->query('SELECT l.log_id, u.username, e.name, l.time, l.event_log FROM logs l inner join event_types e on l.type_id = e.type_id inner JOIN users u on l.user_id = u.user_id inner join privileges p on u.privilege_level = p.privilege_level WHERE l.user_id = :user_id OR l.user_id in (SELECT user_id FROM users where privilege_level < :privilege)');

        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':privilege', $privilege_level);

        $result = $this->db->resultSet();
        return $result;
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        if (isset($row->password_hash) && hash("sha256", $password) == $row->password_hash) {
            $this->dbLog($username, "1", "User Logs in");
            return $row;
        } else {
            return false;
        }
    }

    //Adds log to database table
    public function dbLog($username, $type_id, $log_detail = "") {

        $user_id = $this->findUserIdByUsername($username);
        $this->db->query('INSERT INTO logs (user_id, type_id, time, event_log) VALUES(:user_id, :type, now(), :detail)');

        //Bind values
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':type', $type_id);
        $this->db->bind(':detail', $log_detail);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
