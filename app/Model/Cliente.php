<?php
class Cliente extends AppModel {
	public $displayName = 'nombre';
	public $hasMany = array(
			'Trabajos' => array(
				'className' => 'Trabajo',
				'foreignKey' => 'cliente_id',
				'dependent' => true
			)
		);

}
?>