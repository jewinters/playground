<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class character_sheet extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
	}
	
	
	/***********************************************/
	/***********************************************/
	
	public function index() {

		$data['classes']      = Classes::all();
		$data['core_stats']   = CoreStats::find('all', array('order' => 'row_order'));
		$data['skills']       = Skills::all();
		$data['races']        = Races::all();
		$data['damage_types'] = DamageTypes::all();

		$this->load->view('pages/character_sheet/index',$data);
	}

	public function spells() {
		$data['classes'] = Classes::all();

		$this->load->view('pages/character_sheet/spells', $data);
	}

	public function get_spell_list() {
		if ($_GET['class']):
            $class = $_GET['class'];
        	$data['spell_list'] = ClassSpells::find('all', array('conditions'=>array('class_name=?',$class), 'select' => 'spell_name'));
            #echo($data['spell_list']);
            $return = "<select id=\"spell_list\">";
            foreach($data['spell_list'] as $spell) {
            	$return .= "\n<option value=\"" . $spell->spell_name ."\">". $spell->spell_name . "</option>";
            }
            $return .= "</select>";
            echo($return);
        endif;
	}

}

?>
