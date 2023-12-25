<?php

/**
 * Documentação DatabaseControllerFactoryMysql
 * 
 * classe adapter para a criação do controlador de banco de dados mysql
 */
class DatabaseControllerFactoryMysql extends DatabaseControllerFactory
{
    public function Call(ConnectDatabaseFactory $connectdatabasefactory): DatabaseController
    {
        if(!isset($connectdatabasefactory->conn))
        {
            throw new Exception('Database connection not found');
        }

        $con = $connectdatabasefactory->conn;

        return new DatabaseControllerMysql($con);
    }
}
?>
