
<?php 
    class database {
        private $con         = null;
        private $db_name     = "gestion_promo";
        private $user        = "root";
        private $db_pwd      = "";
        private $server_name = "localhost";

        public function connect_db(){

            // Create connection
            $conn = mysqli_connect($this->server_name, $this->user, $this->db_pwd, $this->db_name);
            return $conn;
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
        }
 
        public function discount(){
            $this->conn = null;
        }
    }
?>