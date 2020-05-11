<meta charset="utf-8">
<?php
	class Lib extends CI_Controller{

         public function __construct()
         {
                 parent::__construct();
                 $this->load->model('lib_models'); //導入models > model的class 名稱
                 $this->load->helper('url');
         }


        public function test(){
        	$fullname = $this->input->post('fullname1');
        	echo $fullname;
        	$this->load->helper('url');
         	$this->load->view('lib/index_ajax');
         	// echo "hello ".$fullname;
         	// return $fullname;
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
			$data['log_in'] = $this->lib_models->log_in();

			$data['title'] = "Library Library Library";
			$this->load->view('lib/header', $data);
			$this->load->view('lib/first_page',$data);
			// $this->load->view('lib/index',$data);
			// $this->load->view('lib/right');
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
				$this->load->view('lib/a1');
				$this->input->post();
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
				$data['select'] = $this->lib_models->select_book($book_name,$publishing,$book_class);
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a1',$data);
			}
			public function a2(){	
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a2');
				// $this->load->view('lib/right');

			}
			public function a2_2(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a2_2');
				// $this->load->view('lib/right');

			}
			public function a3(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3');
				// $this->load->view('lib/right');

			}
			public function a3_1(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a3_1');
				// $this->load->view('lib/right');

			}
			public function a4(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a4');
				// $this->load->view('lib/right');

			}

			public function a5(){
				$data['data2'] = $this->lib_models->get_account();
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a5',$data);
				// $this->load->view('lib/right');

			}

			public function a5_1(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a5_1');
				// $this->load->view('lib/right');

			}
			public function a6(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a6');
				// $this->load->view('lib/right');

			}
			public function a7(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a7');
				// $this->load->view('lib/right');

			}
			public function a8(){
				$data['title'] = "Library Library Library";
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a8');
				// $this->load->view('lib/right');

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
			}

				
	}
