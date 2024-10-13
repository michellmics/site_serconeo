<?php

    include_once 'db.php';


	class SITE_ADMIN
	{
        //declaração de variaveis 
        public $ARRAY_SITEINFO;


        public function stmtToArray($stmtFunction)
		{		
			$stmtFunction_array = array();							
			while ($row = $stmtFunction->fetch(PDO::FETCH_ASSOC))
			{	
				array_push($stmtFunction_array, $row);	
			}		
	
			return $stmtFunction_array;
		}	
	

        public function getSiteInfo()
        {
            // Consulta o texto para a seção "feautes"
            /*
            $sql = "SELECT SBI_DCSITE, 
                            SBI_DCDOMAINSITE, 
                            SBI_DTRENEW_REGISTER_DOMAIN,
                            SBI_STSITE
                            FROM SBI_SITEBASEINFO";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            */
            return "tese";
            
            //$this->ARRAY_SITEINFO = $this->stmtToArray($stmt);            
        }

        
        
        
    }
    