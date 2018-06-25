<?php
class CompteDB extends Model 
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add($idcompte, $libelle, $numerocompte, $solde, $idclient)
	{
		$sql = "INSERT INTO compte
				VALUES (NULL, '$idcompte' '$libelle', '$numerocompte', '$solde', '$idclient')";
		if($this->db != null)
		{
			return $this ->db ->exec($sql);

		}
		else {
			return null;
		}
	}
}
?>