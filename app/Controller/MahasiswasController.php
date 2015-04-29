<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */



/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class MahasiswasController extends AppController {

	public $uses = array("Mahasiswa");

	public function index() {
		$mhs = $this->Mahasiswa->find("all");
		
		$this->set("data", $mhs);
	}
	
	public function view($id) {
		$mhs = $this->Mahasiswa->find("first", array(
			"conditions" => array(
				"npm" => $id
			)
		));
		
		$this->set("nama", $mhs['Mahasiswa']['nama']);
		$this->set("npm", $mhs['Mahasiswa']['npm']);
	}
	
	public function add() {
		if ($this->request->isPost()) {
			$this->Mahasiswa->save($this->request->data);
		}
	}
	
	public function edit($id) {
		if ($this->request->isPost()) {
			$this->Mahasiswa->id = $this->request->data['Mahasiswa']['id'];
			$this->Mahasiswa->save($this->request->data);
			$this->Mahasiswa->id = null;
			
			return $this->redirect(array(
				"action"=>"edit",
				$this->request->data['Mahasiswa']['npm']
			));
		}
		
		$mhs = $this->Mahasiswa->find("first", array(
			"conditions" => array(
				"npm" => $id
			)
		));
		
		$this->set("id", $mhs['Mahasiswa']['id']);
		$this->set("nama", $mhs['Mahasiswa']['nama']);
		$this->set("npm", $mhs['Mahasiswa']['npm']);
	}
	
	public function delete($id) {
		$this->Mahasiswa->id = $id;
		$this->Mahasiswa->delete();
		$this->Mahasiswa->id = null;
		
		return $this->redirect("/mahasiswas");
	}
}
