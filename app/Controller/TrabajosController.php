<?php
class TrabajosController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('Session');
	
	public function index() {
		$params = array('order'=>'nombre desc');
		$this->set('trabajos', $this->Trabajo->find('all',$params));
		//Para buscar
		//$this->set('trabajos', $this->Trabajo->findById(1));
	}

	public function agregar() {
		if($this->request->is('post')):
			if($this->Trabajo->save($this->request->data)):
				$this->Session->setFlash('Trabajo registrado!');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
}
?>