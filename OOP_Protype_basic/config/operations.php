<?php 

    require_once('./config/dbconfig.php');
    $db = new dbconfig();

    class operations extends dbconfig
    {
        // Insert Record in the Database
        public function Store_Record()
        {
            global $db;
            if(isset($_POST['btn_save']))
            {
                $promo_name = $db->check($_POST['promo_name']);

                if($this->insert_record($promo_name))
                {
                    echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
                }
                else
                {
                    echo '<div class="alert alert-danger"> Failed ): </div>';
                }
            }
        }


      // Insert Record in the Database Using Query    
        function insert_record($a)
        {
            global $db;
            $query = "insert into promotion (name) values('$a')";
            $result = mysqli_query($db->connection,$query);

            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        //View Database Record
        public function view_record()
        {
            global $db;
            $query = "select * from promotion";
            $result = mysqli_query($db->connection,$query);
            return $result;
        }

        //Get Particular Record
        public function get_record($id)
        {
            global $db;
            $sql = "select * from promotion where ID='$id'";
            $data = mysqli_query($db->connection,$sql);
            return $data;
        }

    }
?>