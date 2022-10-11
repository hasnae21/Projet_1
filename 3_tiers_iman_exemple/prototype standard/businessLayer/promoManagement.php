<?php 
require_once('../dataLayer/query.php');
class promoManagement{
    private $data;
    private $errors = [];
    private static $fields = ['promo'];
    public $isSuccess = false;

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    function checkInput($data){
        $data=trim($data);          // remove white spaces
        $data=stripslashes($data);  // removes backslashes added by the addslashes() function.
        $data=htmlspecialchars($data);
        return $data;
    } 
    
 
    public function insert(){
        if(empty($this->checkInput($this->data['promo']))){
            $this->promoError = 'This field can not be empty';
            $this->isSuccess = false;
            echo 'this field can not be empty';
            }
            else{
                $promoAdd = new promotion();	
                $promoQuery = new promoQuery();
                $promoAdd->setPromo($this->checkInput($this->data['promo']));
                $promoQuery->insertPromoQuery($promoAdd);
 
                header("Location: ajout.php");
                echo "success";
            }
    }
  
}
?>