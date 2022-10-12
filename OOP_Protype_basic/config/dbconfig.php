
<?php
session_start();
require_once('./config/operations.php');

class dbconfig
{
    public $connection;

    public function __construct()
    {
        $this->db_connect();
    }

    public function db_connect()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'projet_1');
        if (mysqli_connect_error()) {
            die(" Connection Failed ");
        }
    }

    public function check($a)
    {
        $return = mysqli_real_escape_string($this->connection, $a);
        return $return;
    }
}
?>