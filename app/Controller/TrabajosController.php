<?php
class TrabajosController extends AppController {
	public $helpers = array('Html','Form');
	public $components = array('Session');
	public $paginate = array('limit'=>2);

	public function index() {
		$params = array('order'=>'fecha_inicio');
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

	public function finalizar($id = null) {
		$this->Trabajo->id = $id;
		
		if(!$this->Trabajo->exists()) {
			throw new NotFoundException(__('Trabajo incorrecto'));
		}
		if ($this->request->is('get')) {
			$this->request->data['Trabajo']['fecha_fin'] = date('Y-m-d');
			if ($this->Trabajo->save($this->request->data)) {
				$this->Session->setFlash('La finalización del trabajo ha sido registrada');
			} else {
				$this->Session->setFlash('La finalización no pudo ser registrada');
			}
		} else {
			$this->Session->setFlash('No pasa nada');
			$this->request->data = $this->Trabajo->read(null, $id);
		}
		$this->redirect(array('action' => 'index'));
	}
}
?>