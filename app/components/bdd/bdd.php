<?php

class BDD {
	private $host;
	private $dbname;
	private $user;
	private $pwd;

	protected $co = false;

	public function __construct()
	{
		// à l'instantiation
		// je récupère mes infos de connexion depuis
		// mes variables d'environnement
		$this->host = $_ENV["MYSQL_HOST"];
		$this->dbname = $_ENV["MYSQL_DATABASE"];
		$this->user = $_ENV["MYSQL_USER"];
		$this->pwd = $_ENV["MYSQL_PASSWORD"];

		if($this->co == false){
			// Essaie de se connecter à la base
			try {
				// Connexion à la base de données
				$this->co = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pwd);
				$this->co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			// S'il n'y arrive pas, entre dans le catch
			catch(Exception $e){
				// Arrete le traitement et affiche le message d'erreur
				die($e->getMessage());
			}
		}
	}

	// Permet de récupérer la connexion en dehors de la class
	public function getCo(){
		return $this->co;
	}
}