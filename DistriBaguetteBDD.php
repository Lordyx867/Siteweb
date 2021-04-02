<?php


class DistriBdd {
	private object $conn;


	/*construteur*/
	public function __construct(string $servername = "172.20.233.62", string $username = "admin", string $password = "Snir2020*"){
		$this->conn = new PDO("mysql:dbname=ProjetBaguettes;host=$servername", $username, $password);
	}
	

	/* lecture de la table Boulanger*/
	public function read_BLdata(){ 

		//$dataBoulanger = array(); pas utile pour le moment 
			$stmtBL= $this->conn->query("SELECT * FROM Boulanger");
			while ( $row = $stmtBL->fetch() ) 
				{
				$dataBoulanger[] = array($row['Num_Siret'], $row['BL_NOM'] ,$row['BL_Ville'] , $row['BL_Rue'] , $row['BL_CodePostal'], $row['BL_CoodGPS']);
				}
			return $dataBoulanger;  
			
	}
	
	
	/*lecture de la table Baguette*/
	public function read_Bdata(){ 
	
		//$dataBaguette = array(); pas utile pour le moment 
	$stmtB = $this->conn->query("SELECT * FROM Baguette");
			while ( $row = $stmtB->fetch() ) 
				{			
				$dataBaguette[] = array($row['B_Prix'], $row['B_Types'] ,$row['B_Prix'] , $row['B_Date']) ;
				}
			return $dataBaguette;
			
	}
	
	
	/*lecture de la table Distribureur*/	 
	public function read_Ddata(){ 	

		//$dataDistributeur = array(); pas utile pour le moment 
		$stmtD = $this->conn->query("SELECT * FROM Distributeur");
			while($row = $stmtD->fetch()) 
				{			
			$dataDistributeur[] = array($row['Num_ID'], $row['D_Ville'] ,$row['D_Rue'] , $row['D_CodePostal'] , $row['D_NumRUe'], $row['D_CoordGps'], $row['D_NbrBMaxstocker'], $row['D_ModeReglement']);	
				}
			return $dataDistributeur;
	}
	
		
	/*lecture de la table Etat*/
	 
	 public function read_Edata(){
		 //$dataEtat = array();pas utile pour le moment 
		 $stmtE = $this->conn->query("SELECT * FROM Etats");
		 while($row =$stmtE->fetch())
		 {
			 $dataEtat[] = array($row['E_Date'], $row['E_Etat'] ,$row['E_Temperature'] , $row['E_Hydrométrie']);
		 }
		 return $dataEtat;
	 } 
		 
// other function 		 

	/*public function delete data()
	{	
	}
	public function update data () 
	{
	}
	public function write data (string $B_Prix = "")
	{	
	print($conn->exec("insert into Baguette values('1', '2', '3', now())")."<br/>");
	}*/
}


?>


