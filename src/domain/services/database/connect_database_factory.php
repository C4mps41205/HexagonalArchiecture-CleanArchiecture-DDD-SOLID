<?php
include __DIR__.'/../../models/database_model.php';
include 'database_controller_factory.php';

/**
 * Documentação ConnectDatabaseFactory
 * 
 * Classe dedicada a criação de um fabricador de controlador de um database
 */
class ConnectDatabaseFactory
{
    /**
     * Call
     *
     * Função responsável à criar um database controller factory
     *
     * @param DatabaseModel $database_model Description
     * @return DatabaseControllerFactory
     * @throws Exception Not implemented
     **/
    public function Call(DatabaseModel $database_model): DatabaseControllerFactory
    {
        throw new Exception('Not implemented'); 
    }
}
?>