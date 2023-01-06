<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    // register user
    public function register($data)
    {
        $this->db->query('INSERT INTO user(name_user,mail_user,password_user) VALUES (:name, :email, :password)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //   execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //  login user
    public function login($email, $password)
    {
        $this->db->query('SELECT* FROM user WHERE mail_user = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hash_password = $row->password_user;
        if (password_verify($password, $hash_password)) {
            return $row;
        } else {
            return false;
        }
    }
    // find user by email 

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM user WHERE :email = mail_user');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
}
