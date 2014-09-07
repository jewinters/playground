<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class character_sheet extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
	}
	
	
	/***********************************************/
	/***********************************************/
	
	public function index() {

		$data['classes']    = Classes::all();
		$data['core_stats'] = CoreStats::all();
		$data['skills']     = Skills::all();

		$this->load->view('pages/character_sheet/index',$data);
	}

}