<?php

class Roll extends CI_Controller {
	
	public function __construct() {
	    parent::__construct();
	    $this->load->model('Balok');
	    $this->load->helper('url');

		}

	public function index()
	{
		$color = array('blue','green','orange','red','yellow','grey','black','white','purple');
		$random = array_rand($color);
		$key = $this->uri->segment(3);

		if($key == 'reset'){

			$this->Balok->reset($color[$random]);
			redirect(base_url());
		}
		else{
			echo $key;
		}
	}
}
