<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Abstract_Object extends Controller_Template {
	
	protected static $entity = 'abstract';
	
	// Name of template, before resets this to the actual template
	public $template = "layout";
	
	public function action_index(){
		$v = View::factory(static::$entity.'/list');
		$this->template->body = $v;
		
	}
	
	public function action_id(){
		$v = View::factory(static::$entity.'/single');
		$id = $this->request->param('id');
		$model = ORM::factory(static::$entity)->find($id);
		$v->bind('model', $object);
		$this->template->body = $v;
	}
	
	public function action_map(){
		$v = View::factory(static::$entity.'/map');
		$this->template->body = $v;
		
	}
	
}

?>