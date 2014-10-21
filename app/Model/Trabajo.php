<?php
class Trabajo extends AppModel {
	public $displayName = 'descripcion';

	//public $actsAs = array('Containable');

	public $belongsTo = array(
			'Cliente' => array(
					'className' => 'Cliente',
					'foreignKey' => 'cliente_id',
					'dependent' => false
				)
			);
}
?>