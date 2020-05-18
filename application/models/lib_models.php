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
	 public function a2_insert($com_name,$com_add,$com_tel,$com_namep,$com_tel_2,$com_ra1){
	 	$this->load->database();
	 	$totla =array('com_name' => $com_name,'com_add'=>$com_add,'com_tel' => $com_tel , 'com_namep'=>$com_namep,'com_tel_2' =>$com_tel_2,'com_ra1'=>$com_ra1);
	 	$query = $this->db->get('publishing');
	 	$this->db->insert('publishing',$totla);

	 }
	public function a3_select(){
		$this->load->database();
		$query = $this->db->get('p_class');
		$list_data = $query->result();
		foreach ($list_data as $a1) {
		 		$data1[] = $a1->id;
		 		$data2[] = $a1->book_class;
		 		$data3[] = $a1->status;
		 }
		$totla_data= array($data1,$data2,$data3);
		return $totla_data;
	}

	public function a3_insert($book_class,$statue){
		$this->load->database();
		$query = $this->db->get('p_class');
		$total_data=array('book_class'=> $book_class ,'status'=> $statue);
		$this->db->insert('p_class',$total_data);
	}

	public function a3_update($book_class,$statue){
		$this->load->database();
		$query = $this->db->get('p_class');
		$total_data=array('book_class'=> $book_class ,'status'=> $statue);
		$this->db->insert('p_class',$total_data);
	}
	public function a3_where($book_class){
		$this->load->database();
		$query = $this->db->get_where('p_class', array('book_class'=>$book_class));
		$list_data = $query->result();
		foreach ($list_data as $a1) {
			$data1[] = $a1->id;
			$data2[] = $a1->book_class;
			$data3[] = $a1->status;
		}
		$totla_data = array($data1,$data2,$data3);
		return $totla_data;
	}
	public function a5_insert($name_text,$account_text,$pd1,$rad1,$ch1){
	 	$this->load->database();
	 	$query = $this->db->get('data');
	 	$totla =array('name'=>$name_text,'account'=>$account_text,'password'=>$pd1,'status'=>$rad1,'black_status'=>$ch1);
	 	$this->db->insert('data',$totla);
	 }
		public function a7_where(){
		$this->load->database();
		$query = $this->db->get('data');
		$query = $this->db->get_where('data', array('black_status'=>"on"));
		$list_data = $query->result();
		foreach ($list_data as $a1) {
			$data1[] = $a1->id;
			$data2[] = $a1->account;
			$data3[] = $a1->creat_time;	
			$data4[] = $a1->black_timeend;
			$data5[] = $a1->status;
		}
		$totla_data = array($data1,$data2,$data3,$data4,$data5);
		return $totla_data;
	}
	public function a7_insert($name,$publishing,$date,$book_class){
	 	$this->load->database();
	 	$totla =array('book_name' => $name,'publishing'=>$publishing,'date' => $date , 'book_class'=>$book_class);
	 	$query = $this->db->get('book');
	 	$this->db->insert('book',$totla);
	 }
	 public function a7_update($account,$black_status){
	 	$total =array('black_status'=>$black_status);
	 	$this->load->database();
	 	$this->db->get('data');
	 	$this->db->where('account',$account);
	 	$last1 = $this->db->update('data',$total);
	 }
	 // public function a7_up_insert($account,$black_status){
	 // 	$total =array('black_status'=>$black_status);
	 // 	$this->load->database();
	 	
	 // 	$this->db->where('account',$account);
	 // 	$this->db->select('creat_time');
	 // 	$time = $this->db->get('data');
	 // 	$time2 = $time->result();
	 // 	// $time3['omg']=$time2;
	 // 	// var_dump($time2);
	 // 	// echo "this : ".$omg[0][0];
	 // 	// exit();
	 // 	$this->db->insert('black_timeend',$time);
	 // }
	 // public function a7_up_insert2($time){
	 // 	$total =array('black_status'=>$black_status);
	 // 	$this->load->database();
	 // 	$this->db->where('account',$account);
	 // 	$this->db->select('creat_time');
	 // 	$this->db->get('data');
	 // 	$this->db->insert('black_timeend',$time[0][0]);
	 // }
	public function where_book($book_name,$publishing,$book_class){
		$this->load->database();
		$query = $this->db->get_where('book', array('book_name'=>$book_name));
		$query = $this->db->get_where('book', array('publishing'=>$publishing));
		$query = $this->db->get_where('book', array('book_class'=>$book_class));
		$list_data = $query->result();
			foreach ($list_data as $a1) {
			 		$data1[] = $a1->id;
			 		$data2[] = $a1->book_name;
			 		$data3[] = $a1->publishing;
			 		$data4[] = $a1->date;
			 		$data5[] = $a1->book_class;
			 }
		$totla_data = array($data1,$data2,$data3,$data4,$data5);
		return $totla_data;
	}

	public function get_publishing(){
		$this->load->database();
		$query = $this->db->get('publishing');
		$list_data = $query->result();
			foreach ($list_data as $a1) {
		 		$data1[] = $a1->id;
		 		$data2[] = $a1->com_name;
		 		$data3[] = $a1->com_add;
		 		$data4[] = $a1->com_tel;
		 		$data5[] = $a1->com_namep;
		 		$data6[] = $a1->com_tel_2;
		 		$data7[] = $a1->com_ra1;
		 }
		$totla_data= array($data1,$data2,$data3,$data4,$data5,$data6,$data7);
		return $totla_data;
		
	}

	public function get_book(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('book_2');
		$this->db->join('book','book.publishing = book_2.publishing','bool.book_class = book_2.book_class');
		// $this->db->join('book','book.book_class = book_2.book_class');
		$query = $this->db->get();
		// var_dump($query);
		// exit();
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
	public function where_com_name($name){
		$this->load->database();
		$query2 = $this->db->get_where('publishing', array('com_name' => $name));
		$real = $query2->result();
		
			foreach ($real as $a1) {
			 	$data1[] = $a1->id;
			 	$data2[] = $a1->com_name;
			 	$data3[] = $a1->com_add;
			 	$data4[] = $a1->com_tel;
			 	$data5[] = $a1->com_namep;
			 	$data6[] = $a1->com_tel_2;
			 	$data7[] = $a1->com_ra1;
		 }
		$totla_data= array($data1,$data2,$data3,$data4,$data5,$data6,$data7);
		return $totla_data;
	}
	public function Hello($name){

		return "hello".$name;
	}
	public function test1($account,$password){
		if ($account != null && $password != null)
		{

			if($account=="tsrn" && $password="1234")
			{
				return json_encode(array(
	            'account' => $account,
	            'password' =>  $password));
			}
	        else
	        	return json_encode(array(
	        	'account'=>"錯誤",
	        	'password'=>"錯誤"));   			
		}	
			
		else
        //回傳 errorMsg json 資料
        return json_encode(array('errorMsg' => '??????！'));
        
	}
	public function log_in($ac,$pd){
		if($ac!=null && $pd !=null){
			$this->load->database();
		 	$this->db->get('data');
			$this->db->select('name');
		 	$this->db->where('account',$ac);
		 	$this->db->where('password',$pd);
		 	$real = $this->db->get('data');
		 	$real2 = $real->result();
		 		foreach ($real2 as $a1) {
					$data1 = $a1->name;	 
			}
			return $data1;
		}
		else
			return "nodata";

	}

	public function user_login($username,$password){

		$this->load->database();
		$query_string = "select name from data where name=".$this->db->escape($username)." and password=".$this->db->escape($password);
	  	$query = $this->db->query($query_string);
	  	
	  	if ($query->num_rows() > 0)	{
	  		return true;
	  	} else {
	  		return false;
	  	}
	}
}