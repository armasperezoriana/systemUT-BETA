<?php

	namespace content\modelo;

	use content\config\conection\database as database;

	class reportesModel extends database{

		private $con;

		public function __construct(){
			$this->con = parent::__construct();
		}

	}

?>