<?php

    //include_once 'db.php';


	class SITE_ADMIN
	{
        //declaração de variaveis 
        public $pdo;
        public $ARRAY_SITEINFO;


        function conexao()
        {
            $host = 'localhost';
            $dbname = 'serconeo_dbprod';
            $user = 'serconeo_dbprod';
            $pass = 'dbprodserconeo';

            try {
                $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }


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

            try {
           
                $sql = "SELECT SBI_DCSITE, 
                                SBI_DCDOMAINSITE, 
                                SBI_DTRENEW_REGISTER_DOMAIN,
                                SBI_STSITE
                                FROM SBI_SITEBASEINFO";

                $this->conexao();
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                // Em caso de erro, retorna a mensagem do erro
                return ["error" => $e->getMessage()];
            }
                return "tese";
            
            //$this->ARRAY_SITEINFO = $this->stmtToArray($stmt);            
        }

        
        
        
    }
    