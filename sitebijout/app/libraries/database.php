<?php

/**
 * PDO Data base Class
 * connect to db 
 * create prepared statements
 * bind values
 * return rows and  results
 */

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    //pour geree base de donnees
    private $dbh;
    // pour les declaration
    private $stmt;
    // pour les erreur
    private $error;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            // pour verfier la connection 
            PDO::ATTR_PERSISTENT => true,
            // affiche erreur 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        // create PDO instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    // prepare statement with query 
    public function query($sql)
    {
        $this->stmt  = $this->dbh->prepare($sql);
    }
    //  lier les valeurs 
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    // execute the prepared statement
    public function execute()
    {
        return $this->stmt->execute();
    }
    // Get result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    // GET row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}
