<?php
class Trabajo extends AppModel {
	public $displayName = 'descripcion';
	public $belongsTo = array(
			'Cliente' => array(
					'className' => 'Cliente',
					'foreignKey' => 'cliente_id'
				)
			);
}
?>