<?php
App::uses('AppController', 'Controller');
/**
 * Casos Controller
 *
 */
class ArquivadosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array('RequestHandler');

    public $casos = array(
        'caso'
    );

    public $configuracaoSocioFamiliares = array(
        'sociofamiliar'
    );

	public $arquivados = array(
        'arquivado'
    );

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        //$this->Caso->recursive = 0;
        $this->set('casos', $this->paginate());
    }

    public function view($id = null) {
        $this->Caso->id = $id;
        if (!$this->Caso->exists()) {
            throw new NotFoundException(__('Caso não existe.'));
        }
        $this->set('caso', $this->Caso->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {

            $this->Arquivado->create();
            $f_save = $this->Arquivado->save($this->request->data);

            if ($f_save) {
                $this->Session->setFlash(
                    __('O novo caso foi adicionado!')
                );
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Não foi possível adicionar o caso :\\')
            );

        }
    }

    public function edit($id = null) {
        $this->Arquivado->id = $id;
        if (!$this->Arquivado->exists()) {
            throw new NotFoundException(__('Caso não existe.'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Arquivado->save($this->request->data)) {
                $this->Session->setFlash(
                    __('Os dados do caso foram modificados.')
                );
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                __('Não foi possível modificar os dados do caso!')
            );
        } else {
            $this->request->data = $this->Arquivado->read(null, $id);
            unset($this->request->data['Arquivado']['password']);
        }
    }

    public function delete($id = null) {
        $this->request->allowMethod('post');

        $this->Arquivado->id = $id;
        if (!$this->Arquivado->exists()) {
            throw new NotFoundException(__('Caso não existe.'));
        }
        if ($this->Arquivado->delete()) {
            $this->Session->setFlash(__('Caso removido!'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Não foi possível remover o caso.'));
        return $this->redirect(array('action' => 'index'));
    }
	
	public function view_pdf($id = null) {
		$this->Arquivado->id = $id;
		if (!$this->Caso->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		// increase memory limit in PHP
		ini_set('memory_limit', '512M');
		$this->set('arquivado', $this->Arquivado->read(null, $id));
	}
}
