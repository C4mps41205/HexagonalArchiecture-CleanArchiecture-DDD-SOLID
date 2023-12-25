<?php


/**
 *  Documentação GetDatabaseController
 * 
 *  Interface (classe usecase) dedicada a fazer o fluxo de criação de um controlador de database
 */
class GetDatabaseController
{
    /** @var ConnectDatabaseFactory $connect_database_factory variável destinada para a criação do fluxo */
    public $connect_database_factory;

    /**
     * Construtor
     *
     * Undocumented function long description
     *
     * @param ConnectDatabaseFactory $connect_database_factory injeção de dependência 
     **/
    public function __construct(ConnectDatabaseFactory $connect_database_factory)
    {
        $this->connect_database_factory = $connect_database_factory;
    }

    /**
     * Função call que estava em connect database factory
     *
     * Fazendo um polimofismo na função de connect database factory que está rodando o fluxo
     *
     * @param DatabaseModel $database_settings Modelo de credênciais do banco de dados
     * @return DatabaseController retorna um controlador de um banco de dados
     **/
    public function Call(DatabaseModel $database_settings): DatabaseController
    {
        $database_controller_factory = $this->connect_database_factory->Call($database_settings);
        $database_controller = $database_controller_factory->Call($this->connect_database_factory);
        
        return $database_controller;
    }
}
?>
