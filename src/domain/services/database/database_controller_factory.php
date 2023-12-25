<?php

/**
 * Documentação DatabaseControllerFactory
 * 
 * Classe dedicada a criação de um controlador de database para executar as querys
 */
class DatabaseControllerFactory
{
    /**
     * Call
     *
     * Função responsável em criar um controlador de um database
     *
     * @return DatabaseController
     * @throws Exception Not implemented
     **/
    public function Call(ConnectDatabaseFactory $connectdatabasefactory): DatabaseController
    {
        throw new Exception('Not implemented');
    }
}
?>