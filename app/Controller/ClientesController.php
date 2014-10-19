<?php
class ClientesController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('Session');
	
	public function index() {
		$params = array('order'=>'nombre desc');
		$this->set('clientes', $this->Cliente->find('all',$params));
		//Para buscar
		//$this->set('clientes', $this->Cliente->findById(1));
	}
	
	public function add() {
		if($this->request->is('post')):
			if($this->Cliente->save($this->request->data)):
				$this->Session->setFlash('Cliente guardado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
}
?>