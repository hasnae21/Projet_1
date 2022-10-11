
<?php 
require('db.php');

    class promotion {
        private $id;
        private $promo;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getPromo(){
            return $this->task;
        }
        public function setPromo($value){
            $this->task = $value;
        }
    }

    class promoQuery {
        private $con = null;
        public function getConnect(){
            $db = new database();
            $this->con = $db->connect_db();
            return $this->con ;

            if(!$this->con){
                die('error while connection ,,,,!');
            }
        }

        public function insertPromoQuery($promo){
            
                $promo = $promo->getPromo();
           
            
                $res = "INSERT INTO promotion (promo) Values ('$promo')";
                mysqli_query($this->getConnect(), $res);
        }
    }       

?>