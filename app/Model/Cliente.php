<?php
class Cliente extends AppModel {
	public $displayName = 'nombre';
	public $hasMany = array(
			'Trabajo' => array(
				'className' => 'Trabajo',
				'foreignKey' => 'cliente_id',
				'dependent' => true
			)
		);
}
?>