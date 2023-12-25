<?php
include '../../infrastructure/connect_database_factories/connect_database_factory_mysql.php';
include '../../domain/usecases/get_database_controller.php';

$teste = new ConnectDatabaseFactoryMysql(); 
$teste2 = new GetDatabaseController($teste);
$teste3 = $teste2->Call(new DatabaseModel());

echo json_encode(
        $teste3->Execute(
                'select * from actor', array()
                )
        );
?>