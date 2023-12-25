<?php

/**
 * Documentação DatabaseController
 * 
 * Classe dedicada a execução de todas as querys do banco de dados
 */
class DatabaseController
{

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
        throw new Exception('Not implemented');
    }
}
?>