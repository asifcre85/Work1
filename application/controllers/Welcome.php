<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 public function __construct(){		
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
		$this->load->model('Mod');
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		
		// $this->load->view('fst');
		$this->load->view('ord');
	}
    public function ord()
	{
		
		 
		$this->load->view('ord');
	}
	public function table_1()
	{
	
		$this->load->view('table_1');
	}
	public function table_2()
	{
	
		$this->load->view('table_2');
	}
	public function insert()
	{
	
		$this->load->view('insert');
	}
	public function ins()
	{
		$Single=$_POST['Single'];
		$Double=$_POST['Double'];
		
		
		$this->Mod->ins($Single,$Double);
		//$data['result'] = $this->mo->read();
		//$this->load->view('table_2');
	}
	public function update()
	{
	
		$this->load->view('update');
	}
	public function u()
	{
		$Single=$_POST['Single'];
		$Double=$_POST['Double'];
		
		$id=$_POST['id1'];
		
		$this->Mod->u($Single,$Double,$id);
		//$data['result'] = $this->mo->read();
		//$this->load->view('basic_table');
	}
	public function d1()
	{
		$name=$_POST['name'];
		$this->Mod->d1($name);
		//$data['result'] = $this->mo->read();
		//$this->load->view('table_2');
	}

public function ord_2(){
	$a = json_decode($_POST["sendItem"]);
		$b = json_decode($_POST["sendPricee"]);
          $this->Mod->asrhad($a,$b);
}
// public function storePost()
//     {
          
//           $a = json_decode($_POST['sendItem']);
//           $b = json_decode($_POST['sendQuanti']);
//          // $c = json_decode($_POST["pricee"]);
// 		  //$d = json_decode($_POST["totall"]);
// 		  //$e = json_decode($_POST["datee"]);

   
//             $this->Mod->asrhad($a,$b);
//             //$this->load->view('dataview');
//     }
	// public function loadData($record=0) {
	// 	$recordPerPage = 5;
	// 	if($record != 0){
	// 		$record = ($record-1) * $recordPerPage;
	// 	}      	
 //      	$recordCount = $this->Mo->getRecordCount();
 //      	$empRecord = $this->Mo->getRecord($record,$recordPerPage);
 //      	$config['base_url'] = base_url().'index.php/Welcome/loadData';
 //      	$config['use_page_numbers'] = TRUE;
	// 	$config['next_link'] = 'Next';
	// 	$config['prev_link'] = 'Previous';
	// 	$config['total_rows'] = $recordCount;
	// 	$config['per_page'] = $recordPerPage;
	// 	$this->pagination->initialize($config);
	// 	$data['pagination'] = $this->pagination->create_links();
	// 	$data['empData'] = $empRecord;
	// 	echo json_encode($data);		
	// }
	

	



}

?>