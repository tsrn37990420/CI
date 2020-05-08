<meta charset="utf-8">
<?php
	class Lib extends CI_Controller{

		 

         public function __construct()
         {
                 parent::__construct();
                 $this->load->model('lib_models'); //導入models > model的class 名稱
         }


        public function test(){
        	$this->load->helper('url');
         	$this->load->view('lib/index_ajax');
        }
		// public function testPost(){
 	// 		$this->load->view('lib/test');
		// 	echo "result = ".$this->input->post('para');

		// }
		//  public function testPara($strPara) {  
  //   	 echo "result=".$strPara;
 	// 	}
		public function addRsp() {
			$data = array(
					"user_id"    => $this->input->post("user_id"),
					"comment_id" => $this->input->post("comment_id"),
					"response"   => $this->input->post("response")
			   	 );
			$this->msg_model->set_response($data);
			$rsp = $this->msg_model->get_rsp();
			$data = array_merge($name, $rsp);
			echo json_encode($data);
		}        

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
				$this->load->view('lib/header',$data);
				$this->load->view('lib/a1');

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


				
	}
