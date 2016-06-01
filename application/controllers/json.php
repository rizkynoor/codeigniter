<?php
class Json extends Controller {
	function __construct() { #<-PHP5 - __construct(); PHP4 - class name()
		parent::Controller();
		$this->load->model('belajar');
	}
	function bookmark(){
		header('Content-type: application/json');
		echo json_encode($this->belajar->ambil_data());
	}
}