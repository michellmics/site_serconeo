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
            $sql = "SELECT titulo, conteudo, imagem FROM textos_site WHERE secao = 'feautes'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $this->ARRAY_SITEINFO = $stmt->fetch(PDO::FETCH_ASSOC);
            
        }

        
        
        
    }
    