<?php

class NotesController extends AppController {
	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('notes', $this->Note->find('all'));
		$this->set('title_for_layout', 'メモ一覧');
	}
}