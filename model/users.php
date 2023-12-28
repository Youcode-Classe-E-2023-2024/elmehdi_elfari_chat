<?php

class users
{
    public int $id;
    public string $username;
    public string $email;
    public string $password;
    public $connection;


    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAllUsers()
    {
    }

    public function getOneUser()
    {
        $sql = "SELECT * FROM users WHERE email = '$this->email'";
        $result = $this->connection->query($sql);
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
}
