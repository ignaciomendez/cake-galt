<?php
class TrabajosController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('Session');
	public $paginate = array('limit'=>2);

	public function index() {
		$params = array('order'=>'nombre desc');
		$this->Trabajo->recursive = 0;
		$this->set('trabajos', $this->paginate());
		
		//Para buscar
		//$this->set('trabajos', $this->Trabajo->findById(1));
	}

	public function add() {
		if($this->request->is('post')):
			if($this->Trabajo->save($this->request->data)):
				$this->Session->setFlash('Trabajo registrado!');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
		$clientes = $this->Trabajo->Cliente->find('list');
		$this->set(compact('clientes'));
	}
}
?>