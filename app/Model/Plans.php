<?php

class Plans extends AppModel {
	var $name = 'Plans';
	
	 var $hasMany = array('plan_cars' => array(
            'foreignKey' => 'plans_id'));
			
	
}
?>
