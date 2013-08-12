<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
	}
	
	
	/***********************************************/
	/***********************************************/
	
	public function index() {

		$data['widgets'] = Widget::all();

		$this->load->view('pages/edit/index',$data);
	}

	/***********************************************/
	/***********************************************/

	public function edit_item($item_id) {

		$data['widget'] = '';

		$this->load->view('pages/edit/edit_item', $data);
	}

	/***********************************************/
	/***********************************************/

	public function delete_item($item_id) {

		$data['widget'] = '';

		$this->load->view('pages/edit/delete_item', $data);

	}

}
