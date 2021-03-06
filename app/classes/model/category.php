<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Category extends Model_Abstract_Cultuurorm {
		
	protected $_rules = array(
	);
	
	protected $_primary_key = "id_category";
	protected $_has_many = array(
		'monuments' => array(
			'model' => 'monument',
			'foreign_key' => 'id_category',
			'far_key' => 'id_monument',
			'through' => 'monuments',
		)
	);
	
	protected static $entity = "category";
	protected static $schema_sql = "CREATE TABLE IF NOT EXISTS `%s` (
	  	`id_category` int(10) unsigned NOT NULL AUTO_INCREMENT,
	  	`name` varchar(90) NOT NULL,
	  	PRIMARY KEY (`id_category`)
	  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";	
}
?>