<?php
class Compte extends Controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/CompteDB.php';

	}
	public function index() 
	{
		return $this->view->load('compte/index');
	}
	public function add() 
	{
		$comptedb = new CompteDB();
		$comptedb ->add("courant", "17000", "500000",);
		return $this->view->load('compte/add');
	}
}
?>