<?php

class SelectList
{
	
	protected $conn;
	
		public function __construct()
		{
			$this->DbConnect();
		}
	
		protected function DbConnect()
		{
			include "db_config.php";
			
			$this->conn = new mysqli($host,$user,$password, $db) OR die("Impossibile connettersi al database");
			// mysqli_select_db($db,$this->conn) OR die("Impossibile selezionare il database $db");
			
			return TRUE;
		}
		
		public function ShowRegioni()
		{
			$sql = "SELECT * FROM regioni";
			$res = $this->conn->query($sql);
			$regioni = '<option value="0">scegli...</option>';
			
				while($row = $res->fetch_assoc())
				{
					$regioni .= '<option value="' . $row['id_reg'] . '">' . utf8_encode($row['nome_regione']) . '</option>';
				}
				
			return $regioni;
		}
		
		public function ShowProvince()
		{
			$sql = "SELECT * FROM province WHERE id_reg=$_POST[id_reg]";
			$res = $this->conn->query($sql);
			$province = '<option value="0">scegli...</option>';
			
				while($row = $res->fetch_assoc())
				{
					$province .= '<option value="' . $row['id_pro'] . '">' . utf8_encode($row['nome_provincia']) . '</option>';
				}
				
			return $province;
		}
		
		public function ShowComuni()
		{
			$sql = "SELECT * FROM comuni WHERE id_pro=$_POST[id_pro]";
			$res = $this->conn->query($sql);
			$comuni = '<option value="0">scegli...</option>';
			
				while($row = $res->fetch_assoc())
				{
					$comuni .= '<option value="' . $row['id_com'] . '">' . $row['cap'] . ' - ' . utf8_encode($row['comune']) . '</option>';
				}
				
			return $comuni;
		}
}

?>