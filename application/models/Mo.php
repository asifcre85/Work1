<?php
class Mo extends CI_Model {

public function __construct() {
        parent::__construct(); 
    }
   

    function c($name){
    	$data=array(
    		name=>$name,
    	);
    	 $this->db->insert('text1',$data);
    }

    function u($name1,$id){
    	$data=array(
    		name=>$name1,
    	);
    	$this->db->where('id',$id);
		$this->db->update('text1', $data);
    }

    function d($name){
    	
    	$this->db->where('id',$name);
		$this->db->delete('text1');
    }

    public function getRecordCount() {
        $this->db->select('count(*) as allcount');
        $this->db->from('expenses');
        $query = $this->db->get();
        $result = $query->result_array();      
        return $result[0]['allcount'];
    }

     // public function getRecord($rowno,$rowperpage)

    public function getRecord() {         
        $this->db->select('*');
        $this->db->from('expenses');
        //$this->db->limit($rowperpage, $rowno);  
        $query = $this->db->get();          
        return $query->result_array();
    }

    public function present() {         
        $this->db->select('*');
        $this->db->from('present');
        //$this->db->limit($rowperpage, $rowno);  
        $query = $this->db->get();          
        return $query->result_array();
    }


}
?>