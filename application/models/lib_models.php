<?php
class Lib_models extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}


	public function a1_insert($name,$publishing,$date,$book_class){
	 	$this->load->database();
	 	$totla =array('book_name' => $name,'publishing'=>$publishing,'date' => $date , 'book_class'=>$book_class);
	 	$query = $this->db->get('book');
	 	$this->db->insert('book',$totla);

	 }

	public function select_book($book_name,$publishing,$book_class){
		$this->load->database();
		$query = $this->db->get('book');
		// $total = $this->db->select($book_name,$publishing,$book_class);
		// $query = $this->db->get_where('book',['book_name' => $book_name]);
		$real[] = $this->db->where('book_name',$book_name);
		return $real;
	}

	public function get_book(){
		$this->load->database();
		$query = $this->db->get('book');
		$list_data = $query->result();
			foreach ($list_data as $a1) {
		 	$data1[] = $a1->id;
		 	$data2[] = $a1->book_name;
		 	$data3[] = $a1->publishing;
		 	$data4[] = $a1->date;
		 	$data5[] = $a1->book_class;
		 }
		$totla_data= array($data1,$data2,$data3,$data4,$data5);
		return $totla_data;
		
	}


	public function get_account(){
		$this->load->database();
		$query = $this->db->get('data');
		$list_data = $query->result();
			foreach ($list_data as $a1) {
		 	$data1[] = $a1->id;
		 	$data2[] = $a1->name;
		 	$data3[] = $a1->account;
		 	$data4[] = $a1->password;
		 	$data5[] = $a1->status;
		 	$data6[] = $a1->black_status;
		 }
		$totla_data= array($data1,$data2,$data3,$data4,$data5,$data6);
		return $totla_data;
		
	}
		
	public function log_in(){
		$this->load->database();
		$query = $this->db->get('data');
		$list_data = $query->result();
		foreach ($list_data as $a1) {
			$data1[] = $a1->account;
			$data2[] = $a1->password;
		}
		$total_data = array($data1,$data2);
		return $total_data;
	}
}