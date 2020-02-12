<?php
	namespace app\configs;
	
	class Database
	{
		protected $db;
		
		public function __construct()
		{
			$this->connection();
		}
		
		private function connection()
		{
			// sau nay se viet ket noi toi csdl
			$this->db = true;
		}
		
		public function __destruct()
		{
			$this->db = null;
		}
	}
