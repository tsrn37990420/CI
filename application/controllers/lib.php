<meta charset="utf-8">
<?php
	class Lib extends CI_Controller{

		public function index(){
			$data['title'] = "Library Library Library";

			$this->load->view('lib/header', $data);
			$this->load->view('lib/left');
			// $this->load->view('lib/right');


		}

			public function a1(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a1');
				// $this->load->view('lib/right');

			}
			public function a2(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a2');
				// $this->load->view('lib/right');

			}
			public function a3(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a3');
				// $this->load->view('lib/right');

			}

			public function a4(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a4');
				// $this->load->view('lib/right');

			}

			public function a5(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a5');
				// $this->load->view('lib/right');

			}
			public function a6(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a6');
				// $this->load->view('lib/right');

			}
			public function a7(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a7');
				// $this->load->view('lib/right');

			}
			public function a8(){
			
				$this->load->view('lib/header');
				$this->load->view('lib/a8');
				// $this->load->view('lib/right');

			}
				
	}
