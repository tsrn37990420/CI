<?php
	class Lib extends CI_Controller{

	         public function __construct(){
	                 parent::__construct();
	                 $this->load->model('lib_models'); //導入models > model的class 名稱
	                 $this->load->helper('url');
	         }
	        public function test(){
	        	$fullname = $this->input->post('fullname_val');
	        	$this->load->helper('url');
	         	$this->load->view('lib/index_ajax');
	         	// echo "hello ".$fullname;
	         	return "hello".$fullname;
	        }
	        public function UserLogin(){
	        	$data['title'] = "Library Library Library";
	        	$this->load->helper('url');
	        	$this->load->view('lib/header', $data);
	        	$this->load->view('lib/test0518');

	        	$username = $this->input->post('username');
	        	$password = $this->input->post('password');
	        	$this->load->model('lib_models');
	        	$is_sucess = $this->lib_models->user_login($username,$password);
	        	if($is_sucess){
	        		$arr = array('username'=>$username);
	        		session_id();
					if (!isset($_SESSION)) {
	    				session_start();
					}

	        		$_SESSION['username']=$username;
	        		//$_SESSION['userid']=

	        		echo $_SESSION['username'];
	        		//結果封裝成json字串
	        		$res=json_encode($arr);
	        	}
	        	else{
	        		echo "";
	        	}
	        }
		// public function testPost(){
 	// 		$this->load->view('lib/test');
		// 	echo "result = ".$this->input->post('para');

		// }
		//  public function testPara($strPara) {  
  //   	 echo "result=".$strPara;
 	// 	}
		// public function addRsp() {
		// 	$data = array(
		// 			"user_id"    => $this->input->post("user_id"),
		// 			"comment_id" => $this->input->post("comment_id"),
		// 			"response"   => $this->input->post("response")
		// 	   	 );
		// 	$this->msg_model->set_response($data);
		// 	$rsp = $this->msg_model->get_rsp();
		// 	$data = array_merge($name, $rsp);
		// 	echo json_encode($data);
		// }        

			public function index(){
				// $this->load->helper('url');
	     		$account = $this->input->post('account');
	     		// $password = $this->input->post('password');
				$data['log_in'] = $this->lib_models->log_in();
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header', $data);
				$this->load->view('lib/first_page',$data);
			}
			public function first(){
				// $this->load->helper('url');
	     		// $account = $this->input->post('account');
	     		// $password = $this->input->post('passowrd');
	     		// $data['ap'] = $this->lib_models->test1($account,$password);
	     		// $password = $this->input->post('password');
				// $data['log_in'] = $this->lib_models->log_in();
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header', $data);
				$this->load->view('lib/first_page',$data);
				
			}
			public function se(){
				$ac = $this->input->post('account');
				$pd = $this->input->post('password');
				$data = $this->lib_models->log_in($ac,$pd);
				echo $data;
			}
			public function a1(){
				$data['title'] = "Library Library Library";
				$data['book'] = $this->lib_models->get_book();
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a1',$data);
			}
			public function a1_1(){
				$data['title'] = "Library Library Library";	
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a1_1');
				// $this->lib_models->a1_insert();
			}
			public function a1_2(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a1_2');
				// $this->input->post();
				$book_name = $this->input->post('book_name');
				$c = $this->input->post('publishing');
				$d = $this->input->post('date');
				$e = $this->input->post('book_class');
				var_dump($book_name,$c,$d,$e);
				$this->lib_models->a1_insert($book_name,$c,$d,$e);
			}
			public function a1_3(){
				$data['title'] = "Library Library Library";
				$book_name = $this->input->post('book_name');
				$publishing = $this->input->post('publishing');
				$book_class = $this->input->post('book_class');
				$data['select'] = $this->lib_models->where_book($book_name,$publishing,$book_class);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a1_3',$data);
			}
			public function a2(){	
				$data['title'] = "Library Library Library";
				$data['publishing'] = $this->lib_models->get_publishing();
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a2',$data);		
			}
			public function a2_2(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a2_2');
			}
			public function a2_3(){
				$data['title'] = "Library Library Library";
				$com_name = $this->input->post('com_text');
				$com_add= $this->input->post('com_add');
				$com_tel= $this->input->post('com_tel');
				$com_namep= $this->input->post('com_namep');
				$com_tel_2= $this->input->post('com_tel_2');
				$com_ra1= $this->input->post('com_ra1');
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a2_3');
				$this->lib_models->a2_insert($com_name,$com_add,$com_tel,$com_namep,$com_tel_2,$com_ra1);
			}
			public function a2_4(){	
				$data['title'] = "Library Library Library";
				// $data['publishing'] = $this->lib_models->get_publishing();
				$com_name=$this->input->post('com_text');
			 	$data['where_name'] = $this->lib_models->where_com_name($com_name);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a2_4',$data);
			}
			public function a3(){
				$data['title'] = "Library Library Library";
				$data['select'] = $this->lib_models->a3_select();
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3',$data);

			}
			public function a3_1(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3_1');

			}
			public function a3_2(){
				$data['title'] = "Library Library Library";
				$book_name= $this->input->post('insert_class_name');
				$status = $this->input->post('insert_class_status');
				$this->lib_models->a3_insert($book_name,$status);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3_2');
			}
			public function a3_3(){
				$data['title'] = "Library Library Library";
				$book_name= $this->input->post('insert_class_name');
				$status = $this->input->post('insert_class_status');
				// $id_name = $this->input->post('')
				$this->lib_models->a3_update($book_name,$status);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3_3');
			}
			public function a3_4(){
				$data['title'] = "Library Library Library";
				$book_class =$this->input->post('class_text');
				$data['book_class'] = $this->lib_models->a3_where($book_class);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3_4',$data);
			}
			public function a4(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a4');

			}

			public function a5(){
				$data['data2'] = $this->lib_models->get_account();
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a5',$data);
			}
			public function a5_1(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a5_1');
			}
			public function a5_2(){
				$data['title'] = "Library Library Library";
				$name_text = $this->input->post('name_text');
				$account_text = $this->input->post('account_text');
				$pd1 = $this->input->post('pd1');
				$rad1 = $this->input->post('rad1');
				$ch1 = $this->input->post('ch1');								
				$data['data2'] = $this->lib_models->a5_insert($name_text,$account_text,$pd1,$rad1,$ch1);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a5_2',$data);
			}
			public function a6(){
				$data['title'] = "Library Library Library";
				$data['book'] = $this->lib_models->get_book();
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a6',$data);
			}
			public function a7(){
				$data['title'] = "Library Library Library";
				$data['black_p'] = $this->lib_models->a7_where();
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a7',$data);
			}
			public function a7_1(){
				$data['title'] = "Library Library Library";
				// $data['black_insert'] = $this->lib_models->a7_insert();
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a7_1',$data);
			}
			public function a7_2(){
				$data['title'] = "Library Library Library";
				$black_account = $this->input->post('black_account');
				$black_status = $this->input->post('black_radio');
				$data['black_update'] = $this->lib_models->a7_update($black_account,$black_status);
				// $data['time'] = $this->lib_models->a7_up_insert($black_account,$black_status);
				// $this->lib_models->a7_up_insert2($data);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a7_2',$data);
				// $this->load->view('lib/right');
			}
			public function a8(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a8');
				// $this->load->view('lib/right');
			}
			public function userDetails(){
				$postdata = $this->input->post();
			}
            public function a9(){

            		// $data['book2'] = $this->lib_models->select_book();
            	$this->input->post();
				$book_name = $this->input->post('book_name');
				$publishing = $this->input->post('publishing');
				$book_class = $this->input->post('book_class');
					
				$data['select'] = $this->lib_models->select_book($book_name,$publishing,$book_class);

				var_dump($data['select']);
					// $post = $this->input->post();

					// foreach ($post as $key => $value) {
					// 	switch ($key) {
					// 		case 'book_name':
					// 			$data[$key] = $value;
					// 			break;
							
					// 		default:
					// 			$data[$key] = $value;
					// 			break;
					// 	}
					// }
                      

     //                 $data['publishing']="1";
     //                 $data['date']="2";
     //                 $data['book_class']="3";


					//  $this->db->insert('book',$data);
					//  $id = $this->db->insert_id();
					//  $query =$this->db->insert_string('book',$data);

            	// $total = $this->input->post();
            	// var_dump($total);


		// $this->db->select('*');
		// $this->db->from('p_class');
		// $this->db->join('book','book.book_class = p_class.book_class');
		// $this->db->join('book','book.status = p_class.status');
			}

				
	}
