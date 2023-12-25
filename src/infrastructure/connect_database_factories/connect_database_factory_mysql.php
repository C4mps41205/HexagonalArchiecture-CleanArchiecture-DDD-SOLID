<?php
include(__DIR__.'/../../domain/services/database/connect_database_factory.php');
include('C:\wamp64\www\projeto devrise\src\infrastructure\database_controller_factories\database_controller_factory_mysql.php');
include('C:\wamp64\www\projeto devrise\src\infrastructure\database_controllers\database_controller_mysql.php');

/**
 * Documentação ConnectDatabaseFactoryMysql
 * 
 * classe adapter para o a criação do connect database factory mysql
 */
class ConnectDatabaseFactoryMysql extends ConnectDatabaseFactory  
{
    /** @var PDO $conn variável destinada a criação da instância mysql */
    public PDO $conn;
    /**
     * Função Call (polimofismo da função call da herança)
     *
     * Essa função foi definida nos services, onde está as regras de negócio.
     *
     * @param DatabaseModel $database_model modelo onde está as credênciais
     * @return DatabaseControllerFactory o retorno dessa classe é um database_controller_factory referente ao banco de dados desta classe (só irá funcionar se o adapter tiver herança do services)
     * @throws Exception apenas se as credênciais do banco de dados não funcionar
     **/
    public function Call(DatabaseModel $database_model): DatabaseControllerFactory
    {
        $database_model->setHost('localhost');
        $database_model->setUser('root');
        $database_model->setPassword('');
        $database_model->setDatabaseName('sakila');

        $servername = $database_model->getHost();
        $username = $database_model->getUser();
        $password = $database_model->getPassword();
        $dbname = $database_model->getDatabaseName();

        try 
        {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) 
        {
            throw new Exception('Erro reportado na conexão de banco de dados: '. $e->getMessage());
        }

        $connect_database_factory_mysql = new DatabaseControllerFactoryMysql(); 
        return $connect_database_factory_mysql;
    }
}
?>
