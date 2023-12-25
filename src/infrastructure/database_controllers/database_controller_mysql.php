<?php
include(__DIR__.'/../../domain/services/database/database_controller.php');

/**
 * Documentação DatabaseController
 */
class DatabaseControllerMysql extends DatabaseController
{

    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    /**
     * Execute
     *
     * Função responsável por executar as querys dos bancos de dados
     *
     * @param string $query query para o database
     * @param array $params parâmetros da query 
     * @return array
     * @throws Exception Not implemented
     **/
    public function Execute(string $query, array $params): array
    {
        $stringWhere = " WHERE ";

        try {

            if(count($params) == 0)
            {
                $stringWhere = "";
            }   
            else
            {
                foreach($params as $column => $value):
                    $stringWhere .= " " . $column . " = '". $value . "' AND";
                endforeach;
            }

            $stringWhere = rtrim($stringWhere, " AND");

            $query = $this->conn->query($query . $stringWhere);
            $fetch = $query->fetchAll(PDO::FETCH_ASSOC);

            return $fetch;
        } catch (PDOException $e) 
        {
            return array($e->getMessage());
        }
    }
}
?>