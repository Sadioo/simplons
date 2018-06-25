<?php
class Client extends Controller
{
	public function __construct()
	{
		parent::__construct();
		require_once 'model/ClientDB.php';
	}
	public function index() 
	{
		return $this->view->load('client/index');
	}
	public function add() 
	{
		$clientdb = new ClientDB();
		$clientdb ->add("Faye", "Jeaan", "Thies");
		return $this->view->load('client/add');
	}
	public function liste()
	{
		$clientdb = new ClientDB();
		//var_dumb($clientdb->ListeClient());
		$listes =$clientdb->listeClient();
		return $this->view->load('client/liste');
								'clients'=>$listes
	}
}
?>