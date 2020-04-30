<?php
class Mod extends CI_Model {

public function __construct() {
        parent::__construct(); 
    }

function asrhad($a,$b){
    	
    	for($i = 0; $i < count($a); $i++) {

$this->db->query("INSERT INTO sales_details (name, price)
VALUES
('$a[$i]','$b[$i]')");

}
    	
    }

    function ins($Single,$Double){
        $data=array(
            name=>$Single,
            price=>$Double
           
           
        );
         $this->db->insert('products',$data);
    }

    function u($Single,$Double,$id){
    	$data=array(
    		name=>$Single,
            price=>$Double
            
    	);
    	$this->db->where('id',$id);
		$this->db->update('products', $data);
    }

    function d1($name){
        
        $this->db->where('id',$name);
        $this->db->delete('products');
    }

}
 
 ?>