<?php

class NotesController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('notes', $this->Note->find('all'));
		$this->set('title_for_layout', 'メモ一覧');
	}

	public function view($id = null) {
		if(!$id) {
			throw new NotFoundException(__('データが存在しません。'));
		}

		$note = $this->Note->findById($id);
		if(!$note) {
			throw new NotFoundException(__('データが存在しません。'));
		}
		$this->set('note', $note);
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Note->create();
			if($this->Note->save($this->request->data)) {
				$this->Session->setFlash('保存しました。');
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('保存できませんでした。');
		}
	}
}